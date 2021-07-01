@extends('backend.master.master')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-12">
                <h1>
                    <i class="fa fa-edit"></i> Update Record</h1>
            </div>
            <div class="col-md-12">
                @include('backend.layouts.messages')
                <hr>
            </div>
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <form action="" method="post" enctype="multipart/form-data">
                            {{csrf_field()}}

                            <div class="form-group">
                                <label for="name">Name:
                                    <a style="color: red;">{{$errors->first('name')}}</a>
                                </label>
                                <input type="text" name="name"
                                       value="{{$adminData->name}}"
                                       id="name" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="username">Username:
                                    <a style="color: red;">{{$errors->first('username')}}</a>
                                </label>
                                <input type="text" name="username"
                                       value="{{$adminData->username}}"
                                       id="username" class="form-control">
                            </div>


                            <div class="form-group">
                                <label for="email">Email:
                                    <a style="color: red;">{{$errors->first('email')}}</a>
                                </label>
                                <input type="text" name="email"
                                       value="{{$adminData->email}}"
                                       id="email" class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="image">Profile Picture:
                                    <a style="color: red;">{{$errors->first('image')}}</a>
                                </label>
                                <input type="file" name="image" class="btn btn-default">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">Update Record</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4">
                        <img src="{{url('upload/super-admin/'.$adminData->image)}}"
                            class="img-responsive img-thumbnail"
                             alt=""
                        style="margin-top: 23px;">

                    </div>
                </div>

            </div>
        </div>
    </div>


@endsection
