@extends('adminlte::layouts.app')
@section('main-content')
<div class="container pt-4">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1>Add</h1>
                </div>
                <div class="col-md-6" style="text-align: right">
                    <a href="{{ url('product')}}" class="btn btn-primary float-end">Back</a>
                </div>
            </div>
        </div>
        <div class="card-body text-center">
            <form action="{{ url('product.store')}}"> 
            @csrf 
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Id</strong>
                            <input type="text" name="id" class="form-control" placeholder="Sign id in here">
                        </div>
                        <div class="form-group">
                            <strong>Title</strong>
                            <input type="text" name="title" class="form-control" placeholder="Sign title in here">
                        </div>
                        <!-- <div class="form-group">
                            <strong>Description</strong>
                            <input type="text" name="NgaySinh" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <strong>Active</strong>
                            <input type="text" name="active" class="form-control" placeholder="Sign active in here">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Arrange</strong>
                            <input type="text" name="arrange" class="form-control" placeholder="Sign arrange in here">
                            <!-- <select name="GioiTinh" class="form-select">
                                <option selected>Chọn giới tính</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select> -->
                        </div>
                        <div class="form-group">
                            <strong>Create at</strong>
                            <input type="date" name="create" class="form-control">
                        </div>
                        <div class="form-group">
                            <strong>Updated at</strong>
                            <input type="date" name="updated" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <strong>Description</strong>
                    <input type="text" name="description" class="form-control" placeholder="Sign desciption in here">
                </div>
                <button type="submit" class="bnt bnt-success mt-2">Save</button>
            </form>
        </div>
    </div>
</div>
<style>
    .bnt.bnt-success.mt-2 {
        background: #00d600;
        border-radius: 10%;
        border: none;
        padding: 5px 20px;
    }
</style>


@endsection