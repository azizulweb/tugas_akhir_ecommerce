<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function user()
    {
        return view('user.user');   
    }

    public function home()
    {
        $product=Product::all();
        return view('layout.home', compact('product'));   
    }
}
