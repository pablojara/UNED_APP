<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenido a la asociacion de comerciantes de Opera, Madrid.';
        return view('pages.index', compact('title'));
    }


    public function cookies(){
        $title = 'Sobre nosotros';
        return view('pages.cookies', compact('title'));
    }

    public function legal(){

        return view('pages.legal');
    }

    public function privacy(){

        return view('pages.privacy');
    }


}

