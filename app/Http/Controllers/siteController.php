<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class siteController extends Controller
{
    public function showHome()
    {
        return view('home');
    }

    public function showAbout()
    {
        return view('about');
    }

    public function showServices()
    {
        return view('services');
    }

    public function showPortfolio()
    {
        return view('portfolio');
    }
}
