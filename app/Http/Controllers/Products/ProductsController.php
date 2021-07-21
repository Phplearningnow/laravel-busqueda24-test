<?php

namespace App\Http\Controllers\Products;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function inicio() {
        $productos = Product::all();
        return view('productos.inicio', compact('productos'));
    }
}
