<!DOCTYPE html>
<html lang="en">

@include('frontend.layouts.head')

<body style="font-family: Roboto">
    @include('frontend.layouts.navbar')

     @yield('content')

    @include('frontend.layouts.footer')
    <script src="{{ asset('js/navafter.js') }}"></script>

   
{{-- Before </body> --}}
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.1/trix.min.js"></script>
@stack('scripts')
</body>

</html>
