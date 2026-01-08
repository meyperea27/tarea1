<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\User;

class DashboardController extends Controller
{
    public function index()
    {
        $productCount = Product::count();
        $categoryCount = Category::count();
        $userCount = User::count();
        $users = User::all(); // Get all users

        return view('dashboard', compact('productCount', 'categoryCount', 'userCount', 'users'));
    }
}
