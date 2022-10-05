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

<div class="container" style="overflow:auto;">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h1>Table Categories</h1>
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
                <a href="/categories/create" class="btn btn-primary float-end">Create new categories</a>
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
                    <th>Title</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Arrange</th>
                    <th>Created_at</th>
                    <th>Updated_at</th>
                </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ $category->description }}</td>
                    <td>{{ $category->active }}</td>
                    <td>{{ $category->arrange }}</td>
                    <td>{{ $category->created_at }}</td>
                    <td>{{ $category->updated_at }}</td>
                    <td>
                        <form action="">
                            <a href="/categories/update/{{ $category->id }}"  class="btn btn-info">Update</a>
                            <a href="/categories/delete/{{ $category->id }}" class="btn btn-danger">Delete</a>
                        </form>
                    <td>
                </tr>
            @endforeach
            </tbody>
        </table>
        {{$categories->links()}}
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