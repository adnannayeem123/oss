<?php

namespace App\Http\Controllers;
use App\models\Product;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function Product(){
        return view('backend.product');
    }

    public function productform()
    {
        return view('backend.productform');
    }
    public function productstore(request $request)
    {
        //dd($request->all());
        Product::create([
           'name'=>$request->pro_name,
           'description'=>$request->description,
        ]);
        return redirect()->back();
    }
    
}
