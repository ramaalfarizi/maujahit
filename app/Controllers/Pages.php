<?php

namespace App\Controllers;

class Pages extends BaseController
{
    public function index()
    {
        $title = [
            'title' => 'Home'
        ];
        return view('pages/home', $title);
    }
    public function about()
    {
        $title = [
            'title' => 'About'
        ];
        return view('pages/about', $title);
    }
}
