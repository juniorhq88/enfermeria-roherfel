<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function index()
    {
        return view('pages.home');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function contact()
    {
        return view('pages.contact');
    }
}