<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Qiniu\Storage\UploadManager;
use Qiniu\Auth as QiniuAuth;
use Qiniu\Storage\BucketManager;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = \App\Category::all();

        return view('admin.categories', ['categories' => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.category_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $category = new \App\Category();
        $category->name = $request->name;
        $category->max_temp = $request->max_temp;
        $category->description = $request->description;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $key = 'category_' . $request->name . '.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->main_pic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/category_' . $request->name . '.jpg';
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $key = 'category_banner_' . $request->name . '_category.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->banner = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/category_banner_' . $request->name . '.jpg';
        }

        $category->save();
        return redirect('/admin/categories');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = \App\Category::find($id);
        return view('admin.category_edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $category = \App\Category::find($id);
        $category->name = $request->name;
        $category->max_temp = $request->max_temp;
        $category->description = $request->description;

        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $token = $auth->uploadToken($bucket);

        if ($request->file('main_pic')) {

            $filePath = $request->file('main_pic');
            $key = 'category_' . $request->name . '.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->main_pic = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/category_' . $request->name . '.jpg';
        }
        if ($request->file('banner')) {

            $filePath = $request->file('banner');
            $key = 'category_banner_' . $request->name . '_category.jpg';
            $uploadMgr = new UploadManager();
            $uploadMgr->putFile($token, $key, $filePath);

            $category->banner = 'http://' . \Config::get('filesystems.disks.qiniu.domain') . '/category_banner_' . $request->name . '.jpg';
        }

        $category->save();
        return redirect('/admin/categories');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = \App\Category::find($id);
        $accessKey = \Config::get('filesystems.disks.qiniu.access_key');
        $secretKey = \Config::get('filesystems.disks.qiniu.secret_key');
        $bucket = \Config::get('filesystems.disks.qiniu.bucket');
        $auth = new QiniuAuth($accessKey, $secretKey);
        $bucketMgr = new BucketManager($auth);
        $key = 'category_' . $category->name . '.jpg';
        $key2 = 'category_banner_' . $category->name . '_category.jpg';
        $bucketMgr->delete($bucket, $key);
        $bucketMgr->delete($bucket, $key2);
        $category->delete();
        return redirect('/admin/categories');
    }
}
