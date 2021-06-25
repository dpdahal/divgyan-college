@include('backend.layouts.header')
@include('backend.layouts.footer')
@include('backend.layouts.top-nav')
@include('backend.layouts.aside')

@yield('header')
@yield('top-nav')
@yield('aside')
@yield('content')

@yield('footer')
