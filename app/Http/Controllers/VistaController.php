<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function vista()
    {
        return view('Vista');
    }

}