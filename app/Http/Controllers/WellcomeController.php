<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index(){
        $data = [
            'pageTitle' => 'Tentang Kami',
            'content' => 'Ini adalah halaman tentang kami.'
        ];
        return view('welcome', $data);
    }
}