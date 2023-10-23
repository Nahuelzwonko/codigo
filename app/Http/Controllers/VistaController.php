<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VistaController extends Controller
{
    public function vista()
    {
        return view('vista');
    }
    public function inicioCm()
    {
        return view('communityManager');
    }
    public function communication()
    {
        return view('posts.strategic-communication'); 
    }
    public function marketing()
    {
        return view('posts.advertisingAndMarketing');
    }
    public function technology()
    {
        return view('posts.technology');
    }
}