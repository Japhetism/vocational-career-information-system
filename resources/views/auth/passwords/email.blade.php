@extends('main')
@section('title', '| Reset Password')
@section('link', 'Reset Password')
@section('content')
<div class="col-md-offset-4 col-md-4 col-md-offset-4" style="background-color:grey; margin-bottom:30px;">
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status')}}
        </div>
    @endif
    <form action="{{ route('password.email') }}" method="post" class="form-horizontal">
        {{ csrf_field()}}
        <h5 style="color:white">Password Reset</h5>
        <hr>
        <p><input class="form-control" id="email" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required></p>
        <p><input class="btn btn-primary" type="submit"  name="regUser" value="Send Password Reset Link"></p>
    </form><br>
</div>
@stop