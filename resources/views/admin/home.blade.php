@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div class="panel-heading">Products List</div>


            </div>
            <table class="table">

                <tr>
                <td>品名</td>
                <td>类目</td>
                <td>修改日期</td>
                    <td><a href="/admin/product/create"><button type="button" class="btn btn-primary">新建</button></a></td>
                </tr>

                @foreach($products as $product)
                    <tr>
                        <td>{{$product['name']}}</td>
                        <td>{{$category=\App\Category::find($product['category_id'])['category']}}</td>
                        <td>{{$product['updated_at']}}</td>
                        <td>


                            <form action="/admin/product/{{$product['id']}}" method="POST">
                                <input type="hidden" name="_method" value="delete" />
                                {!! csrf_field() !!}
                                <a href="/admin/product/{{$product['id']}}/edit" target="_blank"><button type="button" class="btn btn-success">修改</button></a>
                                <button type="submit" class="btn btn-danger" >删除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection
