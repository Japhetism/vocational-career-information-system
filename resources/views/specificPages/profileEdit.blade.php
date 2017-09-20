@extends('main')
@section('title', '| Edit Profile')
@section('link', 'Edit Profile')
@section('content')
<div class="col-md-8" style="text-align:justify">
    <form action="{{ route('updateProfile') }}" method="post">
        <!--form for edit profilen-->
        {{ csrf_field() }}
        <p><label>Surname:</label><input type="text" class="form-control" name="surname" placeholder="Fullname" value="{{Auth::user()->surname}}"></p>
        <p><label>Firstname:</label><input type="text" class="form-control" name="firstname" placeholder="Fullname" value="{{Auth::user()->firstname}}"></p>
        <p><label>Username:</label><input type="text" class="form-control" name="username" placeholder="Username" value="{{Auth::user()->username}}" readOnly/></p>
        <p><label>Email:</label><input type="email" class="form-control" name="email" placeholder="Email" value="{{Auth::user()->email}}" readOnly/></p>
        <p><label>Telephone:</label><input type="tel" class="form-control" name="telephone" placeholder="Telephone" value="{{Auth::user()->telephone}}"></p>
        <p><input type="radio" name="gender" id="gender" value="Male">Male
            <input type="radio" name="gender" id="gender" value="Female">Female</p>
        <p><input type="submit" name="sugSubmit" class="btn btn-primary" value="Save Changes"></p>
        <p><input type="submit" name="sugSubmit" class="btn btn-default" value="Cancel"></p>
    </form>
</div>
@stop