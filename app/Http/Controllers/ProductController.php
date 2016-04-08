<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;


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
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        $categories = Category::all();

        return view('admin.home', ['products' => $products, 'categories' => $categories]);
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
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $key = 'product_' . $request->name . '.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->mainpic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/product_' . $request->name . '.jpg';
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $key = 'product_' . $request->name . '_category.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->categorypic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/product_' . $request->name . '_category.jpg';
        }

        $product->save();
        return redirect('/admin');
    }

    public function edit($id)
    {
        $product = \App\Product::find($id);
        $categories = \App\Category::all();
        return view('admin.product_edit', ['product' => $product,'categories'=>$categories]);
    }

    public function update(Request $request, $id)
    {
        $product = \App\Product::find($id);
        $product->name = $request->name;
        $product->title = $request->title;
        $product->description = $request->description;
        $product->keywords = $request->keywords;
        $product->profile = $request->profile;
        $product->main = $request->main;
        $product->standard = $request->standard;
        $product->options = $request->options;
        $product->categorypara = $request->categorypara;
        $product->category_id = $request->category_id;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('mainpic')) {

            $filePath = $request->file('mainpic');
            $key = 'product_' . $request->name . '.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->mainpic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/product_' . $request->name . '.jpg';
        }
        if ($request->file('categorypic')) {

            $filePath = $request->file('categorypic');
            $key = 'product_' . $request->name . '_category.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $product->categorypic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/product_' . $request->name . '_category.jpg';
        }


        $product->save();
        return redirect('/admin');

    }

    public function destroy($id)
    {
        $product = \App\Product::find($id);
        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key = 'product_' . $product['name'] . '.jpg';
        $key2 = 'product_' . $product['name'] . '_category.jpg';
        $bucketMgr->delete($bucket, $key);
        $bucketMgr->delete($bucket, $key2);
        $product->delete();
        return redirect('/admin');
    }


}
