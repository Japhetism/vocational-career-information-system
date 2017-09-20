@extends('main')
@section('title', '| Profile')
@section('link', 'Profile')
@section('content')
<div class="col-md-2">
    <img src='' alt="Image here">
    <br><br><form action="{{ route('editProfile') }}" method="post">
    {{ csrf_field() }}
    <input type="submit" name="editUser" class="btn btn-primary" value="Edit Profile">
    </form>
</div>
<div class="col-md-4">
@if(Session::has('updated'))
    <div class="alert alert-success" role="alert">
        {{Session::get('updated')}}
    </div>
@endif
<strong>Surname: </strong>{{Auth::user()->surname}}<br>
<strong>Firstname: </strong>{{Auth::user()->firstname}}<br>
<strong>Username: </strong>{{Auth::user()->username}}<br>
<strong>Email: </strong>{{Auth::user()->email}}<br>
<strong>Telephone: </strong>{{Auth::user()->telephone}}<br>
<strong>Gender: </strong>{{Auth::user()->gender}}
</div>
<div class="col-md-4">
    User Details Here.......
    Career Suggestion Here....
    Career Request Here.................
    Granted Career Data Here.....................                            
</div>
@stop