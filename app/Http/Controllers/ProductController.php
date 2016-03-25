<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class ProductController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = \App\Product::all()->sortByDesc('updated_at');
        return view('admin.home', ['products' => $products]);
    }

    public function create()
    {
        return view('admin.product_create');
    }

    public function store(Request $request)
    {
        $product = new \App\Product();
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->mainpic = $request->mainpic;
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypic = $request->categorypic;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $product = \App\Product::find($id);
        return view('admin.product_edit',['product'=>$product]);
    }

    public function update(Request $request, $id)
    {
        $product = \App\Product::find($id);
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->mainpic = $request->mainpic;
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypic = $request->categorypic;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;

        $product->save();
        return redirect('/admin');

    }

    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $product->delete();
        return redirect('/admin');
    }

}
