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
{{-- <!-- <div class="container">
    <div class="row">
        <div class="col-md-5 ">
        <h2>Update News</h2>

        <form action="/news/update/{{ $new->id }}" method="post">

        @csrf
        <label for="Category_id">
            <select name="category_id" class="form-select">
                <option selected>Chọn danh mục sản phẩm</option>
                @foreach($categories as $item)
                <option value="{{ $item->id }}">{{ $item->title }}</option>
                @endforeach
            </select>
        </label><br><br>
        <label for="Title">
            <div class="text">
            Title:
            </div>
            <input type="text" name="title" value="{{ $new->title }}"><br>
            <span style="color: red">@error('title'){{$message}}@enderror</span>
        </label><br><br>
        <label for="Image">
            <div class="text">
            Image:
            </div>
            <input type="file" name="image" value="{{ $new->image }}"><br>
        </label><br><br>
        <label for="Content">
            <div class="text">
                Content:
            </div>
            <input type="text" name="content" value="{{ $new->content }}"><br>
            <span style="color: red">@error('content'){{$message}}@enderror</span>
        </label><br><br>
        <label for="Description">
            <div class="text">
            Description:
            </div>
            <textarea name="description" cols="50" rows="5" value="{{ $new->description }}"></textarea>
        </label><br><br>
        <label for="Active">
            <div class="text">
                Active:
            </div><br>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" value="{{ $new->active }}">
                    ON
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2"  value="{{ $new->active }}">
                    OFF
            </div>
            <span style="color: red">@error('active'){{$message}}@enderror</span>
        </label><br><br>
        <label for="Arrange">
            <div class="text">
            Arrange:
            </div>
            <input type="text" name="arrange" value="{{ $new->arrange }}"><br>
            <span style="color: red">@error('arrange'){{$message}}@enderror</span>
        </label><br><br>
        <label for="Created_at">
            <div class="text">
            Created_at:
            </div>
            <input type="date" name="created_at" value="{{ $new->created_at }}"><br>
            <span style="color: red">@error('created_at'){{$message}}@enderror</span>
        </label><br><br>
        <label for="Updated_at">
            <div class="text">
            Updated_at:
            </div>
            <input type="date" name="updated_at" value="{{ $new->updated_at }}"><br>
            <span style="color: red">@error('updated_at'){{$message}}@enderror</span>
        </label><br><br>
        <button type="submit">Edit user</button>
    </form>
        </div>
    </div>
</div> -->
 --}}
<!-- ------------------------------------------------------------------------------------------------------------------------------------- -->\
<div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px">
                <h2>Update News</h2><br>
                <div class="form-group">
                <form action="/news/update/{{ $new->id }}" method="post" enctype="multipart/form-data">
                        @csrf
                        {{-- <div class="form-group">
                            <div class="text">
                                <label for="Category_id">
                                    <select name="category_id" class="form-control">
                                        <option selected>Chọn danh mục sản phẩm</option>
                                        @foreach($categories as $item)
                                        <option value="{{ $item->id }}">{{ $item->title }}</option>
                                        @endforeach
                                    </select>
                                </label><br>
                            </div>
                        </div>  --}}
                        <div class="form-group">
                            <div class="text">
                                <label for="Category_id">
                                <select name="category_id" class="form-select" >
                                    <option >Chọn danh mục sản phẩm </option>
                                    @foreach($categories as $item)
                                    <option @if($new->category_id == $item->id) selected @endif value="{{$item->id}}" >{{ $item->title }}</option>
                                    @endforeach
                                    <span style="color: red">@error('category_id'){{$message}}@enderror</span>
                                </select>
                                </label><br>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Title">
                                        Title:
                                </label>
                                <input type="text" name="title" class="form-control" value="{{ $new->title }}">
                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="image">
                                    Image:
                                </label> 
                            </div>
                            <input type="file" name="image" class="form-control" value="{{ $new->image }}" multiple>
                            {{-- <!-- <span style="color: red">@error('image'){{$message}}@enderror</span> --> --}}
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Content">
                                        Content:
                                </label><br>
                            </div>
                            <input type="text" name="content" class="form-control" value="{{ $new->content }}"><br>
                            <span style="color: red">@error('content'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Description">
                                    Description:
                                </label><br>
                            </div> 
                            @if(isset($new))
                            <textarea name="description" cols="59" rows="5" class="form-control" value="{{ $new->description }}">{{ $new->description }}</textarea>
                            @else
                            <textarea name="description" cols="59" rows="5" class="form-control" ></textarea>
                            @endif
                        </div>
                        <!-- <div class="form-group">
                            <div class="text">
                                <label for="Active">
                                    Active:
                                </label><br>
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" style="margin-left: 30px" value="{{ $new->active }}">
                                        ON
                                    <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" style="margin-left: 100px" value="{{ $new->active }}">
                                        OFF <br>
                                <span style="color: red">@error('active'){{$message}}@enderror</span>
                            </div>
                        </div> -->
                        <div class="form-group">
                            <select name="active" class="form-select" value="{{ $new->active }}">
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
                            <input type="text" name="arrange" class="form-control" value="{{ $new->arrange }}"><br>
                            <span style="color: red">@error('arrange'){{$message}}@enderror</span>
                        </div>
                        <div class="tkchuc" style="display:flex;">
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text" style="padding: 0px 0px">
                                    <label for="Created_at" style="padding: 0px 0px;">
                                        Created_at:
                                    </label>
                                </div>
                                <input type="date" name="created_at" class="" value="{{ $new->created_at }}"><br>
                                <span style="color: red">@error('created_at'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text">
                                    <label for="Updated_at" style="padding: 0px 0px;">
                                        Updated_at:
                                    </label>
                                </div>
                                <input type="date" name="updated_at" class="" value="{{ $new->updated_at }}"><br>
                                <span style="color: red">@error('updated_at'){{$message}}@enderror</span>
                            </div>
                        </div> <br>
                        <button type="submit" class="btn btn-info">Update</button>
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