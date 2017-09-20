@extends('main')
@section('title', '| Login')
@section('link', 'Login')
@section('content')
<div class="col-md-offset-4 col-md-4 col-md-offset-4" style="background-color:grey; margin-bottom:30px;">
    <form action="{{ route('login') }}" method="post" class="form-horizontal">
        {{ csrf_field()}}
        <h5 style="color:white">Existing user, Login and have a full exploration</h5>
        <hr>
        @foreach($errors->all() as $error)
            <div class="alert" style="background-color:black;">
                <ul style="list-style-type:none;">
                    <li style="color:red; text-align:center; font-size:17px;">{{$error}}</li>
                </ul>
            </div>
        @endforeach
        <p><input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus></p>
        <p><input class="form-control" id="password" type="password" name="password" placeholder="Password" required></p>
        <p style="color:white;"><input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me</p>
        <p><input class="btn btn-primary" type="submit"  name="regUser" value="Login">
            <a class="btn btn-link" style="color:white;" href="{{ route('password.request') }}">
                                    Forgot Your Password?
                                </a>
        </p>
    </form><br>
</div>
@stop