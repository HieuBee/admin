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
            <div class="col-md-3"></div>
            <div class="col-md-5">
                <h2>Create categories</h2>
                <form action="/categories/create" method="post">
                    @csrf
                    <label for="Title">
                        <div class="text">
                            Title:
                        </div>
                        <input type="text" name="title" class="btn-categories"><br>
                        <span style="color: red">@error('title'){{$message}}@enderror</span>
                    </label><br><br>
                    <label for="Description">
                        <div class="text">
                            Description:
                        </div>
                        <textarea name="description" cols="50" rows="5"></textarea>
                        <span style="color: red">@error('description'){{$message}}@enderror</span>
                    </label><br><br>
                    <label for="Active">
                        <div class="text">
                            Active:
                        </div><br>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault1">
                                ON
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="active" id="flexRadioDefault2">
                                OFF
                         </div>
                         <span style="color: red">@error('active'){{$message}}@enderror</span>
                    </label><br><br>
                    <label for="Arrange">
                        <div class="text">
                            Arrange:
                        </div>
                        <input type="text" name="arrange"><br>
                        <span style="color: red">@error('arrange'){{$message}}@enderror</span>
                    </label><br><br>
                    <label for="Created_at">
                        <div class="text">
                            Created_at:
                        </div>
                        <input type="date" name="created_at"><br>
                        <span style="color: red">@error('created_at'){{$message}}@enderror</span>
                    </label><br><br>
                    <label for="Updated_at">
                        <div class="text">
                            Updated_at:
                        </div>
                        <input type="date" name="updated_at"><br>
                        <span style="color: red">@error('updated_at'){{$message}}@enderror</span>
                    </label><br><br>
                    <button type="submit">Create user</button>
                </form>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div> -->

    <!-- ------------------------------------------------------------------------------------------------------------------ -->
    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <div class="chido" style="border: 3px solid LightGray; border-radius: 5px;padding: 10px 10px;backgroud:hsl(0deg 0% 95%); ">
                <h2>Create categories</h2><br>
                    <div class="form-group">
                        <form action="/categories/create" method="post">
                            @csrf
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
                            </div><br>
                            <button type="submit" class="btn btn-info text-right">Create</button>
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