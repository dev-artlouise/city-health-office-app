<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>

        <!--Bootstrap css-->
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

        <!--font-awesome-icons-->
        <link rel="stylesheet" href="{{asset('css/all.min.css')}}">

        <!--Custom Css-->
        <link rel="stylesheet" href="{{asset('css/medical-officer.css')}}">
        
    </head>

    <body>

        {{-- sidebar --}}
        @include('includes.medical-officer.sidebar')

        {{-- main contents --}}
        <div class="main-content">
           
            <main>
                @yield('medical-officer-content')
            </main>
            
        </div>

        {{-- @include('sweetalert::alert') --}}


        <!--js bootstrap-->
        <script src="{{asset('js/jquery-slim.min.js')}}"></script>
        <script src="{{asset('js/popper.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>

        <!--Custom js-->
        {{-- <script src="{{asset('js/main.js')}}"></script> --}}
        
    </body>

</html>