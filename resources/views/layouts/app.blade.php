<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!--Bootstrap css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!--Custom Css-->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>

    <body>

        {{--navbar --}}
        @include('includes.navbar')

        {{-- main contents --}}
        <div class="container">
            @yield('content')
        </div>

        {{-- footer --}}
        @include('includes.footer')

        @include('sweetalert::alert')

        <!--js bootstrap-->
        <script src="{{asset('js/jquery-slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!--Custom js-->
        <script src="{{asset('js/index.js')}}"></script>
        
    </body>
</html>