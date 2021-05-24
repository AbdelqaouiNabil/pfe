<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use App\Models;

class AdminController extends Controller
{
    public function index(){
       
        $products = Models\Product::all();

        return view('admin.dashboard', ['products' => $products]);
    }


    public function editProduct($id){
       
        $product = Models\Product::find($id);
            return view('admin.editProduct', ['products' => $product]);
    }
    // find the specific image by id and route to form
    public function editImage($id){
       
        $product = Models\Product::find($id);
            return view('admin.editImageProduct', ['products' => $product]);
    }

    // update image 
    public function UpdateImage(Request $request,$id){

       Validator::make($request->all(),['image'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
       if($request->hasFile("image")){
           $product = Models\Product::find($id);
           $exists = Storage::disk('local')->exists('public/products_images/'.$product->image);
           if($exists){
               Storage::delete('public/products_images/'.$product->image);
           }
           // upload new image ;
           $ext = $request->file('image')->getClientOriginalExtension();
           $request->image->storeAs("public/products_images/",$product->image);
           $arrayToUpdate=array('image'=>$product->image);
           // ad to database
           DB::table('products')->where('id',$id)->update($arrayToUpdate);
           return redirect()->route('admin.dashboard');
       }
       else{
           return redirect('updateImageProduct')->with('fail','some thing goes wrong try again');
       }
     
       
    }

    // edit product 
    public function edit(Request $request,$id){
        $name =$request->input('name');
        $description =$request->input('description'); 
        $type =$request->input('type');
        $price =str_replace("$"," ",$request->input('price'));
        $edit=array('name'=>$name,'description'=>$description,'type'=>$type,'price'=>$price);
        DB::table('products')->where('id',$id)->update($edit);
        return redirect()->route('admin.dashboard');
    }

  // add New Product form
    public function addProductForm(){
        return view('admin.addProductForm');
    }

// add new Product
public function addProduct(Request $request){
    $name = $request->input('name');
    $description = $request->input('description');
    $type = $request->input('type');
    $categories_id=$request->input('categorie');
    $price =str_replace("$"," ",$request->input('price'));
    Validator::make($request->all(),['image'=>"required|file|image|mimes:jpg,png,jpeg|max:5000"])->validate();
    $ext = $request->file('image')->getClientOriginalExtension();
    $imageStringFormat = str_replace(" ","",$name);
    $imageName = $imageStringFormat."." .$ext;
    $encoded_image = File::get($request->image);
Storage::disk('local')->put('public/products_images/'.$imageName,$encoded_image);
$newProduct =array('name'=>$name,'description'=>$description,'type'=>$type,'price'=>$price,'image'=>$imageName,'categories_id'=>$categories_id);
$created = DB::table('products')->insert($newProduct);
    if($created){
        return redirect()->route('admin.dashboard');
    }else{
        return back()->with('fail','some thing goes wrong try again');
    }
}

// remove product 
public function removeProduct($id){
    $product = Models\Product::find($id);
           $exists = Storage::disk('local')->exists('public/products_images/'.$product->image);
           if($exists){
               Storage::delete('public/products_images/'.$product->image);
           }
           Models\Product::destroy($id);
          return redirect()->route('admin.dashboard');
}



}
