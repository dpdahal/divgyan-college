@extends('backend.master.master')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-12">
                <h1>Add Super User</h1>
            </div>
            <div class="col-md-12">
                @include('backend.layouts.messages')
            </div>
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="name">Name:
                                    <a style="color: red;">{{$errors->first('name')}}</a>
                                </label>
                                <input type="text" name="name"
                                       value="{{old('name')}}"
                                       id="name" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="username">Username:
                                    <a style="color: red;">{{$errors->first('username')}}</a>
                                </label>
                                <input type="text" name="username"
                                       value="{{old('username')}}"
                                       id="username" class="form-control">
                            </div>
                        </div>
                    </div>


                    <div class="form-group">
                        <label for="email">Email:
                            <a style="color: red;">{{$errors->first('email')}}</a>
                        </label>
                        <input type="text" name="email"
                               value="{{old('email')}}"
                               id="email" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="password">Password:
                            <a style="color: red;">{{$errors->first('password')}}</a>
                        </label>
                        <input type="password" name="password" id="password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="confirm_password">Confirm Password:
                            <a style="color: red;">{{$errors->first('password_confirmation')}}</a>
                        </label>
                        <input type="password" name="password_confirmation" id="confirm_password"
                               class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">Profile Picture:
                            <a style="color: red;">{{$errors->first('image')}}</a>
                        </label>
                        <input type="file" name="image" class="btn btn-default">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Add Record</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


@endsection
