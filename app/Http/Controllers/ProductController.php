<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::all();
        return view('index', compact('products'));
    }

    public function store(Request $request){
        $number = mt_rand(999999999, 1000000000);

        if($this->ProductCodeExits($number)){
            $number = mt_rand(999999999, 1000000000);
        }
        $request['product_code']=$number;
        Product::create($request->all());

        return redirect('/');
    }

    public function ProductCodeExits($number){
        return Product::whereProductCode($number)->exists();
    }

}
