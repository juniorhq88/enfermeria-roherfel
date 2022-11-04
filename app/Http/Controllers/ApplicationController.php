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
        $services = $this->currentServices();
        return view('pages.contact', compact('services'));
    }

    /**
     * currentServices
     *
     * @return array
     */
    public function currentServices(): array
    {
        $services = [
            'Enfermería general',
            'Auxiliar de enfermería',
            'Enfermería general (Adulto mayor)',
            'Enfermeras auxiliares (Adulto mayor)',
            'Cuidadoras (Adulto mayor)',
            'Enfermera general (Bebés y niños)',
            'Enfermera auxiliar (Bebés y niños)',
            'Nanas (Bebés y niños)',
        ];
        return $services;
    }
}
