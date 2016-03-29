<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index controller
    public function index()
    {
        $products = Product::all();
        return view('index', ['products'=>$products]);
    }

    public function categories()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.categories', ['products'=>$products,'categories'=>$categories]);
    }

    //后续需要一系列产品分类视图
    public function category($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $products_this = Product::where('category_id',$id)->get();
        $category_this = Category::find($id);
        return view('products.category', ['products'=>$products,'categories'=>$categories,'id'=>$id,'products_this'=>$products_this,'category_this'=>$category_this]);
    }

}
