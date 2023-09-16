<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SampleEmail;

class ContactController extends Controller
{
    public function showContactForm()
    {
        $recaptchaSiteKey = config('services.recaptcha.site_key');
        return view('contact', compact('recaptchaSiteKey'));
    }

    public function processForm(Request $request)
    {


        // Validar los datos del formulario
        $validatedData = $request->validate([
            'name' => 'required|string',
            'project' => 'required|string',
            'email' => 'required|email',
            'deadline' => 'string',
            'g-recaptcha-response' => 'required',
        ], [
            'g-recaptcha-response.required' => 'Por favor, completa la validación reCAPTCHA.',
            'g-recaptcha-response.recaptcha' => 'La validación reCAPTCHA ha fallado. Por favor, inténtalo de nuevo.'
        ]);

        try {
            // Envía el correo electrónico
            Mail::to('codehuitweb@gmail.com')->send(new SampleEmail($validatedData));
        } catch (\Exception $e) {
            // Si ocurre un error al enviar el correo, muestra un mensaje de error y redirige al formulario
            return redirect()->route('contact')->with('error', 'Hubo un problema al enviar el formulario.');
        }

        // Otras acciones después de enviar el correo, como redireccionar o mostrar un mensaje de éxito
        return redirect()->route('contact')->with('success', '¡Excelente! Su mensaje fue enviado con éxito.');
        
        
    }
}