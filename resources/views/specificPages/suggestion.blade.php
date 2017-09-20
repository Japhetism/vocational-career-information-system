@extends('main')
@section('title', '| Career Suggestion')
@section('link', 'Career Suggestion')
@section('content')
<div class="col-md-8" style="text-align:justify">
    <form action="" method="post">
        <br><h5>Only relevant vocational career will be consider</h5>
        <!--form on search suggestion-->
        <p><input type="text" class="form-control" name="sugSurname" placeholder="Fullname" value="{{Auth::user()->surname}}&nbsp;{{Auth::user()->firstname}}" disabled/></p>
        <p><input type="text" class="form-control" name="sugUsername" placeholder="Username" value="{{Auth::user()->username}}" disabled/></p>
        <p><input type="email" class="form-control" name="sugEmail" placeholder="Email" value="{{Auth::user()->email}}" disabled/></p>
        <p><input type="tel" class="form-control" name="sugTel" placeholder="Telephone" value="{{Auth::user()->telephone}}" disabled/></p>
        <p><input type="text" class="form-control" name="sugCareer" placeholder="Career Name"></p>
        <p><textarea class="form-control" name="sugCareerDesc" placeholder="Career Description" cols="20" rows="3"></textarea></p>
        <p><input type="submit" name="sugSubmit" class="btn btn-primary" value="Submit Suggestion"></p>
    </form>
</div>
@stop
