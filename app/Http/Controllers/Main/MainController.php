<?php

namespace App\Http\Controllers\Main;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class MainController extends Controller
{

    public function index()
    {
        $products = Product::all();
        $latestProducts = Product::latest()->get();
        return view('Main.index', compact('products', 'latestProducts'));
    }

    public function single($id)
    {
        $product = Product::findOrFail($id);
        $specialProducts = Product::query()->limit('6')->get();
        $latestProducts = Product::latest()->get();
        return view('Main/single', compact('product', 'specialProducts', 'latestProducts'));
    }



}
