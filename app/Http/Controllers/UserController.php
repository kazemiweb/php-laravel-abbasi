<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    //pages
    public function createpage()
    {
        return view('users.createpage');
    }


    public function edit($id)
    {
        $edit = DB::table('users')
            ->select(
                'name',
                'email',
                'password',
                'phonenumber',
                'grade',
                'city',
                'state',
                'date',
                'id',
            )->where('id', $id)
            ->first();

        return view('users.edit', ['edit' => $edit]);
    }







    public function list()
    {
        $users = DB::table('users')->select(
            'name',
            'email',
            'password',
            'phonenumber',
            'grade',
            'city',
            'state',
            'date',
            'id',
        )->get();
        return response()->json(["users" => $users]);
    }
    //methode
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
        return response()->json(["message"=>'user added']);
    }
    public function update(Request $request, $id)
    {
        DB::table('users')
            ->where('id', $id)
            ->update([
                "name" => $request->name,
                "email" => $request->email,
                "password" => $request->password,
                "phonenumber" => $request->phonenumber,
                "grade" => $request->grade,
                "city" => $request->city,
                "state" => $request->state,
                "date" => $request->date,
            ]);
        return response()->json(["message"=>'user updated']);
    }

    public function delete($id)
    {
        DB::table('users')
            ->where('id', $id)
            ->delete();
        return response()->json(["message" => 'user deleted']);
    }
}