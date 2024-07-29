<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class TiendaController extends Controller
{
    public function Tienda(){
        $products = Product::all();
        $Category = Category::all();   
        return view('products.tienda', compact('products','Category'));
    }
}
