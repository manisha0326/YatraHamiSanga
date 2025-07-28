<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body style="font-family: Roboto">
    @include('frontend.layouts.navbar')

     @yield('content')

    @include('frontend.layouts.footer')
    <script src="{{ asset('js/navafter.js') }}"></script>
</body>

</html>
