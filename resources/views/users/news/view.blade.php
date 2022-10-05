@extends('adminlte::layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<!-- ------------------------------------------------------------------------------------------------------- -->

<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h1>Table News</h1>
            </div>
            <div class="col-md-5" style="text-align: right">
                <div class="search-bt">
                    <form action="">
                        <input type="search" name="search" class="inp-search" placeholder="Search"  value="">
                        <button class="btn btn-aaaa">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        </button>
                    </form>
                </div>                        
            </div>
            <div class="col-md-3" style="text-align: right">
                <a href="/news/create" class="btn btn-primary float-end">Create new news</a>
            </div>
        </div>
    </div>
    @if (Session::has('thongbao'))
        <div class="alert alert-success">
            {{Session::get('thongbao')}}
        </div>
    @endif
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category_id</th>
                    <th>Title</th>
                    <th>Image</th>
                    <th>Content</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Arrange</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
            </thead>
            <tbody>
            @foreach($news as $new)
                <tr>
                    <td>{{ $new->id }}</td>
                    <td>{{optional($new->categories)->title }}</td>
                    <td>{{ $new->title }}</td>
                    <td><img src="{{ asset('img/'.$new->image) }}" style="height: 100px; width: 150px;"></td>
                    <td>{{ $new->content }}</td>
                    <td>{{ $new->description }}</td>
                    <td>{{ $new->active }}</td>
                    <td>{{ $new->arrange }}</td>
                    <td>{{ $new->created_at }}</td>
                    <td>{{ $new->updated_at }}</td>
                    <td>
                        <form action="">
                            <a href="/news/update/{{ $new->id }}"  class="btn btn-info">Update</a>
                            <a href="/news/delete/{{ $new->id }}" class="btn btn-danger">Delete</a>
                        </form>
                    <td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$news->links()}}
</div>


</body>
<style>
    .inp-search{
        border: 2px solid #dee2e6;
        border-radius: 5px;
        margin-top: 6px;
    }
    .btn-aaaa {
        margin-top: -6px;
    }
    .btn-aaaa:hover {
        border: none;
        margin-top: -6px;
    }
</style>
</body>
</html>
@endsection