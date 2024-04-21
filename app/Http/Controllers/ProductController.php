<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    //page
    public function createpage()
    {
        return view('products.create');
    }



    public function list()
    {
        $product = DB::table('products')
            ->select('name', 'type', 'color', 'currency', 'id')
            ->get();
        return response()->json(["product" => $product]);
    }



    public function edit($id)
    {
        $edit = DB::table('products')->select('name', 'type', 'color', 'currency', 'id')
            ->where('id', $id)
            ->first();
        return response()->json(['edit' => $edit]) ;
    }

    //methode
    public function create(Request $request)
    {
        DB::table('products')->insert([
            "name" => $request->name,
            "type" => $request->type,
            "color" => $request->color,
            "currency" => $request->currency,
        ]);
        return response()->json(["message"=>'product added']);
    }
    

    public function update(Request $request, $id)
    {
        DB::table('products')
            ->where('id', $id)
            ->update([
                "name" => $request->name,
                "type" => $request->type,
                "color" => $request->color,
                "currency" => $request->currency,
            ]);
        return response()->json(["message" => 'product updated']);
    }

    

     public function delete($id)
     {
        DB::table('Products')
        ->where('id',$id)
        ->delete();
        return response()->json(["message" => 'user deleted']);

     }
}