<?php

namespace App\Controllers;
use App\Core\App;

class UsersController
{
    public function index()
    {
        $users = App::get('database')->selectAll('user');

        return view('users', compact('users'));
    }

    public function store()
    {
        //insert the user associated with the request
        App::get('database')->insert('user', [
            'name' =>$_POST['name']
        ]);
        //and then redirect back to all users
        return redirect('users');
    }

}