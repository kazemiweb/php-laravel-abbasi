<?php

namespace App\Http\Controllers;

use App\Models\order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OrderController extends Controller
{

    //gage
    public function createpage()
    {
        return view('orders.create');

    }

    public function list()
    {

        $order = DB::table('orders')->select(
            'name',
            'type',
            'color',
            'currency',
            'adress',
            'request_time',
            'receiving_time',
            'post_code',
            'id'
        )
            ->get();
        return response()->json(['order' => $order]);
    }


    public function edit($id)
    {
        $edit = DB::table('orders')->select(
            'name',
            'type',
            'color',
            'currency',
            'adress',
            'request_time',
            'receiving_time',
            'post_code',
            'id'
        )
            ->first();
        return response()->json(['edit' => $edit]);

    }



    //method
    public function create(Request $request)
    {
        DB::table('orders')->insert([
            "name" => $request->name,
            "type" => $request->type,
            "color" => $request->color,
            "currency" => $request->currency,
            "adress" => $request->adress,
            "request_time" => $request->request_time,
            "receiving_time" => $request->receiving_time,
            "post_code" => $request->post_code,
        ]);
        return response()->json(["message"=>'order added']);
    }


    public function update(Request $request, $id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->update([
                "name" => $request->name,
                "type" => $request->type,
                "color" => $request->color,
                "currency" => $request->currency,
                "adress" => $request->adress,
                "request_time" => $request->request_time,
                "receiving_time" => $request->receiving_time,
                "post_code" => $request->post_code,
            ]);
            return response()->json(["message"=>'order update']);
    }



    public function delete($id)
    {
        DB::table('orders')
            ->where('id', $id)
            ->delete();
        return response()->json(["message" => 'order deleted']);
    }
}