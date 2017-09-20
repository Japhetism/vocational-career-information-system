@extends('main')
@section('title', '| Register')
@section('link', 'Register')
@section('content')
<div class="col-md-offset-4 col-md-4 col-md-offset-4" style="background-color:grey; margin-bottom:30px;">
    <form action="{{ route('register') }}" method="post" class="form-horizontal">
        {{ csrf_field() }}
        <h5 style="color:white">New user, create an account to have full exploration of vocational career information</h5>
        <hr>
         @foreach($errors->all() as $error)
            <div class="alert" style="background-color:black;">
                <ul style="list-style-type:none;">
                    <li style="color:red; text-align:center; font-size:17px;">{{$error}}</li>
                </ul>
            </div>
        @endforeach
        <p><input class="form-control" type="text" id="surname" name="surname" placeholder="Surname" value="{{ old('surname') }}" required></p>
        <p><input class="form-control" type="text" id="firstname" name="firstname" placeholder="Firstname" value="{{ old('firstname')}}" required></p>
        <p><input class="form-control" type="text" id="username" name="username" placeholder="Username" value="{{ old('username')}}" required></p>
        <p><input class="form-control" type="email" id="email" name="email" placeholder="Email" value="{{ old('email') }}" required></p>
        <p><input class="form-control" type="tel" id="telephone" name="telephone" placeholder="Telephone" value="{{ old('telephone') }}" required></p>
        <p><input type="radio" name="gender" id="gender" value="Male">Male
            <input type="radio" name="gender" id="gender" value="Female">Female</p>
        <p><input class="form-control"  type="password" id="password" name="password" placeholder="Password" required></p>
        <p><input class="form-control" type="password" id="password-confirm" name="password_confirmation" placeholder="Confirm Password" required></p>
        <p><input class="btn btn-primary" type="submit"  name="regUser" value="Register"></p>
    </form><br>
</div>
@stop