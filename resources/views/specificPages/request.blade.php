@extends('main')
@section('title', '| Career Requst')
@section('link', 'Request Career Data')
@section('content')
<div class="col-md-8" style="text-align:justify">
    <form action="{{ route('requestSubmission') }}" method="post"  id="requestForm">
        {{ csrf_field() }}
        <br><h5>Career data request on a click</h5>
        <p><input class="form-control" type="text" name="reqName" id="reqName" placeholder="Fullname" value="{{Auth::user()->surname}}&nbsp;{{Auth::user()->firstname}}" disabled /></p>
        <p><input  class="form-control" type="text" name="reqUsername" id="reqUsername" placeholder="Username" value="{{Auth::user()->username}}" disabled /></p>
        <p><input class="form-control" type="email" name="reqEmail" id="reqEmail" placeholder="Email" value="{{Auth::user()->email}}" disabled /></p>
        <p><input class="form-control" type="tel" name="reqTel" id="reqTel" placeholder="Telephone" value="{{Auth::user()->telephone}}" disabled /></p>
        <p>
            <select name="personality" id="personality" class="form-control" placeholder="Select Personality Type" disabled />
                <option disabled selected hidden>Select Personality Type</option>
                @foreach($personalities as $personality)
                    <option>{{$personality->name}}</option>
                @endforeach
            </select>
        </p>
        <p>
            <select name="name" id="name" class="form-control" placeholder="Select vocation">
                <option disabled selected hidden>Select vocation</option>
                <option>Tailoring</option>
            </select>
        </p>
        <p><textarea class="form-control" name="description" id="description" placeholder="Reason(s) for career request" cols="20" rows="3"></textarea></p>
        <label>Recieve mode</label>&nbsp;&nbsp;&nbsp;<input type="radio" name="mode" value="share link">Share Link&nbsp;&nbsp;
        <input type="radio" name="mode" value="email">Email
        <p><input type="submit" class="btn btn-primary" name="reqSubmit" value="Submit Request"></p>
    </form>
</div>
@stop