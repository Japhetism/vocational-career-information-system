@extends('main')
@section('title', '| About')
@section('link', 'Contact')
@section('content')
<div class="col-md-8" style="text-align:justify">
    <form action="" method="post">
        <h6>Kindly fill out this form to contact us</h6>
        <p><input class="format-chat form-control" type="text" name="contactName" placeholder="Name"></p>
        <p><input class="form-control" type="email" name="contactEmail" placeholder="Email"></p>
        <p><input class="form-control" type="tel" name="contactTel" placeholder="Telephone"></p>
        <p><input class="format-chat form-control" type="text" name="contactSubject" placeholder="Subject"></p>
        <p><textarea class="form-control" name="contactComment" placeholder="Write a comment"></textarea></p>
        <p><input type="submit" class="btn btn-primary" name="contactUs" value="Submit"></p>
    </form>
</div>
@stop