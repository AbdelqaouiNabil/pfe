<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models;
class UserController extends Controller
{
    function index(){
        $products = Models\Product::all();

        return view('user.allproducts', ['products' => $products]);
    }
    function shop(){
        return view('user.shop');
    }
}
