<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to Laravel';
        // return view('pages.index', compact('title')); Method 1
        return view('pages.index')->with('title', $title); //Method 2
    }

    public function about(){
        $title = 'About Us';
        return view('pages.about') ->with('title', $title);
    }
    
    public function services(){
        $data = array(
            'title' => 'Our Services',
            'services' => ['Web Design', 'Coding', 'Illustrations', 'SEO']
        );
        return view('pages.services') -> with($data);
    }
}