@include('frontend.layouts.head')
@include('frontend.layouts.footer')
@include('frontend.layouts.top-header')
@include('frontend.layouts.header')

@yield('head')
@yield('top-header')
@yield('header')

{{--=======main seection =======--}}
@yield('content')
{{--=======end main section========--}}

@yield('footer')



