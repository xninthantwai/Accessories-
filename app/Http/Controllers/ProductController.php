<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){

        $data = Product::orderBy('id', 'asc')->get();
    
        return view('products.index', [
            'product' => $data
        ]);
    }
}
