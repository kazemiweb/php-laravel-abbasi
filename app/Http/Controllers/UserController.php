<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function createpage()
    {
        return view('users.createpage');
    }
    public function edit()
    {
        return view('users.edit');
    }
    public function list()
    {
        $list = DB::table('users')->select(
            'name',
            'email',
            'password',
            'phonenumber',
            'grade',
            'city',
            'state',
            'date'
            
        )->get();
        return view('users.list', ["list"=>$list]);
    }
    //
    public function create(Request $request)
    {
        DB::table('users')->insert([
            "name" => $request->name,
            "email" => $request->email,
            "password" => $request->password,
            "phonenumber" => $request->phonenumber,
            "grade" => $request->grade,
            "city" => $request->city,
            "state" => $request->state,
            "date" => $request->date,
        ]);
        return redirect()->route('users.createpage');
    }
    public function update()
    {
    }
    public function index()
    {
    }
    public function delete()
    {
    }
}