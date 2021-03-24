@extends('layouts.auth')

@section('auth-content')

    <div class="bg-img">
        {{-- <img src="{{asset('img/bg-img.jpg')}}" alt=""> --}}
    </div>

    <div class="logo">

    </div>

    <div class="auth-title">
        <div class="container">
            <div class="row justify-content-center">
                <h1>Zamboanga City Health Office</h1>
            </div>
         </div>
    </div>

    <div class="list-container">
        <div class="row justify-content-center">
            <div class="col-xs-12 col-sm-12 col-md-6">

                <ul class="list-group">
                    <a href="{{'/client-request'}}">
                        <li class="list-group-item">Request for medical Certificate<span><i class="fas fa-chevron-right"></i></span></li>
                    </a> 
                    <a href="{{'/'}}">
                        <li class="list-group-item">How to Request Medical Certificate<span><i class="fas fa-chevron-right"></i></span></li>
                    </a>
                </ul>
            <div>
        </div>
    </div>

    <div class="container">
        <div class='row justify-content-center'>
            <div class='col-xs-12 col-sm-12 col-md-6'>
                <form class='form-container'>
                   
                    <h3>Sign In</h3>
                
                    <div class="form-group mt-4">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="email" class="form-control" placeholder="Enter username" required>
                    </div>

                    <div class="form-group">
                      <label for="password">Password</label>
                      <input type="password" class="form-control" id="password" placeholder="Password" required>
                    </div>

                    <p>For Zamboanga City Health Office(CHO) Officers Only!</p>

                    <!-- <div class="form-check">
                      <input type="checkbox" class="form-check-input" id="exampleCheck1">
                      <label class="form-check-label" for="exampleCheck1">Check me out</label>
                    </div> -->

                    <a href={{'/admin/dashboard'}} class='btn btn-primary btn-block btn-lg'>Login</a>
                    <a href=''>Forgot Password?</a>
                    <!-- <button type="submit" class="btn btn-primary btn-block">Submit</button> -->
                </form>    
            </div>
        </div>
    </div>
@endsection