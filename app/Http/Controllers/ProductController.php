<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function addProduct(){
        $product = [
            'name' => 'phone',
            'name' => 'laptop',
            'name' => 'speaker',
            'name' => 'desktop',
            'name' => 'computer',
        ];
        Product::insert($product);
        return "Product has been inserted successfully!";
    }

    public function searchProduct(Request $request){
        return view('search');
    }

    public function autoCompliteSearch(Request $request){
        $data = Product::select("name")
                ->where("name","LIKE", "%$request->terms%")
                ->get();
        return response()->json($data);
    }
}
