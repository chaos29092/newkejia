@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div class="panel panel-default">
                    <div class="panel-heading">编辑产品</div>
                </div>

                <form action="/admin/product/{{$product['id']}}" method="POST">
                    <input type="hidden" name="_method" value="put" />
                    {!! csrf_field() !!}
                    <div class="form-group">
                        <label for="productName">产品名称(*)</label>
                        <input required type="text" class="form-control" id="productName" name="name" value="{{$product['name']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryId">产品分类(*)</label>
                        <select class="form-control" id="categoryId" name="category_id">
                            <option value="1" @if($product['category_id']==1)selected="selected"@endif>Muffle Furnace</option>
                            <option value="2" @if($product['category_id']==2)selected="selected"@endif>Tube Furnace</option>
                            <option value="3" @if($product['category_id']==3)selected="selected"@endif>CVD & PECVD Systems</option>
                            <option value="4" @if($product['category_id']==4)selected="selected"@endif>Dental Furnace</option>
                            <option value="5" @if($product['category_id']==5)selected="selected"@endif>Vacuum Furnace & Atmosphere Furnace</option>
                            <option value="6" @if($product['category_id']==6)selected="selected"@endif>Customized Furnaces</option>
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
                        <label for="mainPicture">产品主图（直接用七牛云存储的相关链接，宽度为220px）</label>
                        <input type="text" class="form-control" id="mainPicture" name="mainpic" value="{{$product['mainpic']}}">
                    </div>
                    <div class="form-group">
                        <label for="categoryPicture">分类页主图（直接用七牛云存储的相关链接，234px*300px）</label>
                        <input type="text" class="form-control" id="categoryPicture" name="categorypic" value="{{$product['categorypic']}}">
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