<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class ControlProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $category = Category::all();
        //eager loading
        // $category = Category::all();
        $products = Product::with('category')->get();
        return view('ControlProduct.product',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('ControlProduct.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        if($request->path != null){
            $path = $request->file('path')->store('images','drinks');
        }else{
            $path='public.jpg';
        }
        Product::create([
                'name' => $request->name,
                'price' => $request->price,
                'category_id' => $request->category_id,
                'path' => $path,
        ]);
        return redirect()->route('ControlProduct.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::find($id);
        return view('ControlProduct.details',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product = Product::find($id);
        $cat = Category::all();
        return view('ControlProduct.edit',compact('product','cat'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $product = Product::find($id);
        $validated = $request->validate([
            'name' => 'required',
            'price' => 'required',
            'category_id' => 'required',
        ]);
        if($request->path == $product->path || $request->path == null){
            $path = $product->path;
        }else{
            $path = 'images/'.$product->path;
            File::delete($path);
            $path = $request->file('path')->store('images','drinks');
        }
        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'category_id' => $request->category_id,
            'path' => $path
        ]);
        return redirect()->route('ControlProduct.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        if($product->path != 'public.jpg'){
            $path = 'images/'.$product->path;
            File::delete($path);
        }
        $product->delete();
        return redirect()->route('ControlProduct.index');
    }
}