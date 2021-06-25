@section('aside')
    <nav class="navbar-default navbar-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav" id="main-menu">
                <li class="text-center">
                    <img src="" class="user-image img-responsive"/>
                </li>
                <li>
                    <a class="active-menu" href="{{route('admin')}}"><i class="fa fa-dashboard fa-3x"></i> Dashboard</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-users fa-3x"></i> Super Admin<span
                            class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                        <li>
                            <a href="{{route('add-super-admin')}}">Add Admin User</a>
                            <a href="{{route('super-admin')}}">Show</a>
                        </li>


                    </ul>
                </li>

            </ul>

        </div>

    </nav>
@endsection
