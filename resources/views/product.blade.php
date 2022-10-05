@extends('adminlte::layouts.app')
@section('main-content')

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
    <div class="card-header">
        <div class="row">
            <div class="col-md-4">
                <h1>Table Categories</h1>
            </div>
            <div class="col-md-5" style="text-align: center">
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
                <a href="{{ url('create') }}" class="btn btn-primary float-end">Add</a>
            </div>
        </div>
    </div>
    <!-- <div class="card-body">
        @if (Session::has('thongbao'))
            <div class="alert alert-success">
                {{Session::get('thongbao')}}
            </div>
        @endif -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Active</th>
                    <th>Arrange</th>
                    <th>Create at</th>
                    <th>Updated at</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                <tr>
                    <td>{{$member['id']}}</td>
                    <td>{{$member['title']}}</td>
                    <td>{{$member['description']}}</td>
                    <td>{{$member['active']}}</td>
                    <td>{{$member['arrange']}}</td>
                    <td>{{$member['created_at']}}</td>
                    <td>{{$member['updated_at']}}</td>
                    <td>
                    <form action="">
                        <a href="#" class="btn btn-info">Sửa</a>
                        <button type="submit" class="btn btn-danger">Xoá</button>
                    </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    
        <h1>Table News</h1>

        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Title</th>
                <th>Category_id</th>
                <th>Content</th>
                <th>Description</th>
                <th>Active</th>
                <th>Arrange</th>
                <th>Create at</th>
                <th>Updated at</th>
            </tr>
            @foreach($membersNews as $membern)
            <tr>
                <td>{{$membern['id']}}</td>
                <td>{{$membern['title']}}</td>
                <td>{{$membern['category_id']}}</td>
                <td>{{$membern['content']}}</td>
                <td>{{$membern['description']}}</td>
                <td>{{$membern['active']}}</td>
                <td>{{$membern['arrange']}}</td>
                <td>{{$membern['created_at']}}</td>
                <td>{{$membern['updated_at']}}</td>
                <td>
                <form action="">
                    <a href="#" class="btn btn-info">Sửa</a>
                    <button type="submit" class="btn btn-danger">Xoá</button>
                </form>
                </td>
            </tr>
            @endforeach
        </table>
    <!-- </div> -->
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
</html>



@endsection