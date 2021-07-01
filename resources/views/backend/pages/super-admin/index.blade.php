@extends('backend.master.master')

@section('content')
    <!-- /. NAV SIDE  -->
    <div id="page-wrapper">
        <div id="page-inner">
            <div class="col-md-12">
                @include('backend.layouts.messages')
            </div>
            <div class="col-md-12">
                <h1>
                    <i class="fa fa-eye"></i> Show Users</h1>
                <hr>
            </div>
            <div class="col-md-12">
                <table class="table table-hover">
                    <thead>
                    <tr>
                        <th>S.n</th>
                        <th>Name</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>User Types</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($adminData as $key=>$admin)
                        <tr>
                            <td>{{++$key}}</td>
                            <td>{{$admin->name}}</td>
                            <td>{{$admin->username}}</td>
                            <td>{{$admin->email}}</td>
                            <td>
                                @if($admin->status==1)
                                    <button class="btn btn-success btn-xs">
                                        <i class="fa fa-check"></i>
                                    </button>
                                @else
                                    <button class="btn btn-warning btn-xs">
                                        <i class="fa fa-times"></i>
                                    </button>

                                @endif
                            </td>
                            <td>
                                @if($admin->user_type=='admin')
                                    <button class="btn btn-primary btn-xs">
                                       Admin
                                    </button>
                                @else
                                    <button class="btn btn-info btn-xs">
                                        User
                                    </button>

                                @endif
                            </td>
                            <td>
                                <img src="{{url('upload/super-admin/'.$admin->image)}}"
                                     width="30"
                                     alt="">
                            </td>
                            <td>
                                <a href="{{route('edit-super-admin').'/'.$admin->id}}" class="btn btn-sm btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route('delete-super-admin').'/'.$admin->id}}"
                                   class="btn btn-sm btn-danger"
                                    onclick="return confirm('are you sure?')">
                                    <i class="fa fa-trash-o"></i>
                                </a>
                            </td>

                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <!-- /. PAGE INNER  -->


@endsection
