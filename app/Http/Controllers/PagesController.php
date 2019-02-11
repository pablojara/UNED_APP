<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Bienvenido a la asociacion de comerciantes de Opera, Madrid.';
        return view('pages.index', compact('title'));
    }


    public function about(){
        $title = 'Sobre nosotros';
        return view('pages.about', compact('title'));
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SEO']
        );
        return view('pages.services')->with($data);
    }

}

