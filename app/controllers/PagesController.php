<?php
namespace App\Controllers;

class PagesController
{
    public function home()
    {
       return view('index');
    }

    public function about()
    {
        $name = 'Laracast';
        return view('about');
    }

    public function contact()
    {
        return view('contact');
    }

}