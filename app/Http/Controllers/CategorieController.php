<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models;

class CategorieController extends Controller
{
    public function index(){
        $watches = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.categories_id')
        ->select('products.name','products.price','products.id','products.image')
        ->where('categories.name', '=', "watches")
        ->get();
        return view('categorie.WatchesCat', ['watches' => $watches]);
        
    }
    public function glasses(){
        $glasses = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.categories_id')
        ->select('products.name','products.price','products.id','products.image')
        ->where('categories.name', '=', "glasses")
        ->get();
        return view('categorie.glassesCat ', ['glasses' => $glasses]);
        
    }
    public function jackets(){
        $jackets = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.categories_id')
        ->select('products.name','products.price','products.id','products.image')
        ->where('categories.name', '=', "jackets")
        ->get();
        return view('categorie.jacketsCat ', ['jackets' => $jackets]);
        
    }
    public function clothes(){
        $clothes = DB::table('products')
        ->join('categories', 'categories.id', '=', 'products.categories_id')
        ->select('products.name','products.price','products.id','products.image')
        ->where('categories.name', '=', "clothes")
        ->get();
        return view('categorie.clothesCat ', ['clothes' => $clothes]);
        
    }


    
}
