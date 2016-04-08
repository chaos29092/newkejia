<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Http\Requests;
use App\ProductModel;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //index controller
    public function index()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('index', ['products'=>$products,'categories'=>$categories]);
    }

    public function categories()
    {
        $products = Product::all();
        $categories = Category::all();
        return view('products.categories', ['products'=>$products,'categories'=>$categories]);
    }

    public function category($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $products_this = Product::where('category_id',$id)->get();
        $category_this = Category::find($id);
        return view('products.category', ['products'=>$products,'categories'=>$categories,'id'=>$id,'products_this'=>$products_this,'category_this'=>$category_this]);
    }

    public function product($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $product_this = Product::find($id);
        $category_this = $categories->where('id',$product_this['category_id'])->first();
        $products_this = $products->where('category_id',$product_this['category_id'])->all();
        return view('products.product', ['products'=>$products,'categories'=>$categories,'product_this'=>$product_this,'products_this'=>$products_this,'category_this'=>$category_this]);
    }
    
    public function models($id)
    {
        $products = Product::all();
        $categories = Category::all();
        $product_this = Product::find($id);
        $models_this = ProductModel::where('product_id',$id)->get();
        $category_this = $categories->where('id',$product_this['category_id'])->first();
        $products_this = $products->where('category_id',$product_this['category_id'])->all();
        return view('products.models', ['products'=>$products,'categories'=>$categories,'product_this'=>$product_this,'products_this'=>$products_this,'category_this'=>$category_this,'models_this'=>$models_this]);
    }

}
