<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class WelcomeController extends Controller
{
    public function index()
    {
        $products = Product::with('category')->latest()->take(6)->get();
        return view('welcome', compact('products'));
    }
}
