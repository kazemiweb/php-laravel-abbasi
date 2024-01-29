<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function informationuser()
    {
        return view('users.information');
    }
    public function edit()
    {
        return view('users.edit');
    }
    public function list()
    {
        return view('users.list');
    }
}
