<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $endpoint =  'https://astro.flexcellents.com/api/v1/astrologers';
        return view('home', [
            'astrologersEndpoint' => $endpoint,
        ]);
    }
}
