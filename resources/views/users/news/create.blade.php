@extends('adminlte::layouts.app')
@section('main-content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px;backgroud: ">
                <h2>Create news</h2><br>
                <div class="form-group">
                    <form action="/news/create" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <div class="text">
                                <label for="Category_id">
                                    <select name="category_id" class="form-control">
                                        <option selected>Chọn danh mục sản phẩm</option>
                                        @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </label><br>
                                <span style="color: red">@error('category_id'){{$message}}@enderror</span>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <div class="text">
                                <label for="Title">
                                        Title:
                                </label>
                                <input type="text" name="title" class="form-control"><br>
                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="image">
                                    Image:
                                </label> 
                            </div>
                            <input type="file" name="image" class="form-control"><br>
                            <span style="color: red">@error('image'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Content">
                                        Content:
                                </label><br>
                            </div>
                            <input type="text" name="content" class="form-control"><br>
                            <span style="color: red">@error('content'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Description">
                                    Description:
                                </label><br>
                            </div> 
                            <textarea name="description" cols="59" rows="5" class="form-control"></textarea>
                        </div>
                        <!-- <div class="form-group">
                            <div class="text">
                                <label for="Active">
                                    Active:
                                </label><br>
                                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" style="margin-left: 30px">
                                    ON
                                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" style="margin-left: 100px">
                                    OFF
                            </div>
                            <span style="color: red">@error('active'){{$message}}@enderror</span>
                        </div> -->
                        <div class="form-group">
                            <select name="active" class="form-select">
                                <option selected>Active</option>
                                <option value="ON">ON</option>
                                <option value="OFF">OFF</option>
                            </select> <br>
                            <span style="color: red">@error('active'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Arrange">
                                    Arrange:
                                </label><br>
                            </div>
                            <input type="text" name="arrange" class="form-control"><br>
                            <span style="color: red">@error('arrange'){{$message}}@enderror</span>
                        </div>
                        <div class="tkchuc" style="display:flex;">
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text" style="padding: 0px 0px">
                                    <label for="Created_at" style="padding: 0px 0px;">
                                        Created_at:
                                    </label>
                                </div>
                                <input type="date" name="created_at" class=""><br>
                                <span style="color: red">@error('created_at'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text">
                                    <label for="Updated_at" style="padding: 0px 0px;">
                                        Updated_at:
                                    </label>
                                </div>
                                <input type="date" name="updated_at" class=""><br>
                                <span style="color: red">@error('updated_at'){{$message}}@enderror</span>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-info">Create</button>
                    </form>
                </div>
                </div>
                
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
</body>
</html>
@endsection