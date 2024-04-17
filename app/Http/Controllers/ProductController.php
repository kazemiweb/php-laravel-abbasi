<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function createpage()
    {
        return view('products.create');
    }

    public function create(Request $request)
    {
        DB::table('users')->insert([
            "name"=>$request->name,
            "type"=>$request->type,

        ]);
    }


}