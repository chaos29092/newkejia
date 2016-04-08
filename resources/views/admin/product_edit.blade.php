@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑产品</div>
                </div>

                <form action="/admin/product/{{$product['id']}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="productName">产品名称(*)</label>
                        <input required type="text" class="form-control" id="productName" name="name" value="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryId">产品分类(*)</label>
                        <select class="form-control" id="categoryId" name="category_id">
                            @foreach($categories as $category)
                                <option value="{{$category['id']}}" @if($product['category_id']==$category['id'])selected="selected"@endif>{{$category['name']}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="productTitle">页面标题</label>
                        <input type="text" class="form-control" id="productTitle" name="title" value="{{$product['title']}}">
                    </div>
                    <div class="form-group">
                        <label for="productDescription">页面描述</label>
                        <textarea class="form-control" rows="3" id="productDescription" name="description">{{$product['description']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productName">页面关键词</label>
                        <input type="text" class="form-control" id="productName" name="keywords" value="{{$product['keywords']}}">
                    </div>
                    <div class="form-group">
                        <label for="mainPicture">产品主图（使用七牛云，图大于600px比较好，.jpg格式，无法删除图片，这里只能新添，无法修改，欲删除，就删产品）。</label>
                        <input name="mainpic" type="file" id="mainPicture">
                        <img src="http://{{\Config::get('filesystems.disks.qiniu.domain')}}/product_{{$product['name']}}.jpg?imageView2/0/w/200/h/200" alt="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryPicture">分类页主图（直接用七牛云存储的相关链接，234px*300px，.jpg格式，无法删除图片，这里只能新添，无法修改，欲删除，就删产品）</label>
                        <input name="categorypic" type="file" id="categoryPicture">
                        <img src="http://{{\Config::get('filesystems.disks.qiniu.domain')}}/product_{{$product['name']}}_category.jpg?imageView2/0/w/200/h/200" alt="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryPara">分类页简单参数(li列表)：</label>
                        <textarea class="form-control" rows="2" id="categoryPara" name="categorypara">{{$product['categorypara']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productProfile">主要功能介绍（最上面的黑体字）</label>
                        <textarea class="form-control" rows="2" id="productProfile" name="profile">{{$product['profile']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productMain">简单介绍（外观和原理的简单介绍）：</label>
                        <textarea class="form-control" rows="3" id="productMain" name="main">{{$product['main']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productStandard">简单介绍（外观和原理的简单介绍,li列表）：</label>
                        <textarea class="form-control" rows="6" id="productStandard" name="standard">{{$product['standard']}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="productOptions">可选选项（订购时可选配件或附加件,li列表）：</label>
                        <textarea class="form-control" rows="4" id="productOptions" name="options">{{$product['options']}}</textarea>
                    </div>


                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection