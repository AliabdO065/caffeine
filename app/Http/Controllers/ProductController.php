<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $category = Category::all();
        $products = Product::when(request('id') , function($q){
            $q->where('category_id',request('id'));
        })
        ->latest()->get();
        return view('product',compact('products','category'));
    }
    // public function choosed(){
    //     $products = Product::where('category_id',request('id'))->latest()->get();
    //     $category = Category::all();
    //     return view('product',compact('products','category'));
    // }

    public function details($id){
        $product = Product::find($id);
        return view('details',compact('product'));
    }

}
