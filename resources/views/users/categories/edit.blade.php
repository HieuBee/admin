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
<!-- <div class="container">
    <div class="row">
        <div class="col-md-5">
            <h2>Create Categories</h2>
            @foreach ($categories as $category)
            <form action="/categories/update/{{ $category->id }}" method="post">
            @endforeach
    
            @csrf
                <label for="Title">
                    <div class="text">
                    Title:
                    </div>
                    <input type="text" name="title" value="{{ $category->title }}"><br>
                    <span style="color: red">@error('title'){{$message}}@enderror</span>
                </label><br><br>
                <label for="Description">
                    <div class="text">
                    Description:
                    </div>
                    <textarea name="description" cols="50" rows="5" value="{{ $category->description }}"></textarea>
                </label><br><br>
                <label for="Active">
                    <div class="text">
                        Active:
                    </div><br>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" value="{{ $category->active }}">
                            ON
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2"  value="{{ $category->active }}">
                            OFF
                        </div>
                    <span style="color: red">@error('active'){{$message}}@enderror</span>
                </label><br><br>
                <label for="Arrange">
                    <div class="text">
                    Arrange:
                    </div>
                    <input type="text" name="arrange" value="{{ $category->arrange }}"><br>
                    <span style="color: red">@error('arrange'){{$message}}@enderror</span>
                </label><br><br>
                <label for="Created_at">
                    <div class="text">
                    Created_at:
                    </div>
                    <input type="date" name="created_at" value="{{ $category->created_at }}"><br>
                    <span style="color: red">@error('created_at'){{$message}}@enderror</span>
                </label><br><br>
                <label for="Updated_at">
                    <div class="text">
                    Updated_at:
                    </div>
                    <input type="date" name="updated_at" value="{{ $category->updated_at }}"><br>
                    <span style="color: red">@error('updated_at'){{$message}}@enderror</span>
                </label><br><br>
                <button type="submit">Edit user</button>
            </form>
        </div>
    </div>
</div> -->

<!-- --------------------------------------------------------------------------------------------------------------- -->
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px;backgroud: ">
            <h2>Create news</h2><br>
                <div class="form-group">
                    @foreach ($categories as $category)
                    <form action="/categories/update/{{ $category->id }}" method="post">
                    @endforeach
                        @csrf
                        <div class="form-group">
                            <div class="text">
                                <label for="Title">
                                        Title:
                                </label>
                                <input type="text" name="title" class="form-control" value="{{ $category->title }}"><br>
                                <span style="color: red">@error('title'){{$message}}@enderror</span>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Description">
                                    Description:
                                </label><br>
                            </div> 
                            @if(isset($category))
                            <textarea name="description" cols="59" rows="5" class="form-control" value="{{ $category->description }}">{{ $category->description }}</textarea>
                            @else
                            <textarea name="description" cols="59" rows="5" class="form-control" ></textarea>
                            @endif
                            <!-- <textarea name="description" cols="59" rows="5" class="form-control" value="{{ $category->description}}"></textarea> -->
                        </div>
                            
                        <!-- <div class="form-group">
                            <div class="text">
                                <label for="Active">
                                    Active:
                                </label><br>
                                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1" style="margin-left: 30px" value="{{ $category->active }}">
                                    ON
                                <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2" style="margin-left: 100px" value="{{ $category->active }}">
                                    OFF
                            </div>
                            <span style="color: red">@error('active'){{$message}}@enderror</span>
                        </div> -->
                        <div class="form-group">
                            <div class="text">
                                <select name="active" class="form-select" value="{{ $category->active }}">
                                    <option selected>Active</option>
                                    <option value="ON">ON</option>
                                    <option value="OFF">OFF</option>
                                </select> <br>
                            </div>
                            <span style="color: red">@error('active'){{$message}}@enderror</span>
                        </div>
                        <div class="form-group">
                            <div class="text">
                                <label for="Arrange">
                                    Arrange:
                                </label><br>
                            </div>
                            <input type="text" name="arrange" class="form-control" value="{{ $category->arrange }}"><br>
                            <span style="color: red">@error('arrange'){{$message}}@enderror</span>
                        </div>
                        <div class="tkchuc" style="display:flex;">
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text" style="padding: 0px 0px">
                                    <label for="Created_at" style="padding: 0px 0px;">
                                        Created_at:
                                    </label>
                                </div>
                                <input type="date" name="created_at" class="" value="{{ $category->created_at }}"><br>
                                <span style="color: red">@error('created_at'){{$message}}@enderror</span>
                            </div>
                            <div class="form-group" style="padding: 0px 60px;">
                                <div class="text">
                                    <label for="Updated_at" style="padding: 0px 0px;">
                                        Updated_at:
                                    </label>
                                </div>
                                <input type="date" name="updated_at" class="" value="{{ $category->updated_at }}"><br>
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