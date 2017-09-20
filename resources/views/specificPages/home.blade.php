@extends('main')
@section('title', '| Home')
@section('link', 'Home')
@section('content')
<div class="col-md-6">
    Slide show here
    <h2>Vocational Career</h2>
    <!--<p>Brief Discussion of vocational career</p>-->
    <p><strong>Benefits of Vocational Career</strong> are:</p>
    <ul style="line-height: 1.5em; margin-top: 5px">
        <li style="font-size: 15px">Employment creation.</li>
        <li style="font-size: 15px">Exploration of skills.</li>
        <li style="font-size: 15px">Entreprenurial skill improvement.</li>
        <li style="font-size: 15px">Increase standard of living</li>
    </ul>
    <p><strong>Vocational Career Factors</strong> are:</p>
    <ul style="line-height: 1.5em; margin-top: 5px">
        <li style="font-size: 15px">Interest fin field.</li>
        <li style="font-size: 15px">Personality.</li>
        <li style="font-size: 15px">Family business.</li>
        <li style="font-size: 15px">Economic stability.</li>
    </ul>
    <p>Explore our website for more information on vocational career.</p>
</div>
<div id="profile" class="col-md-5 col-md-offset-1">
@if(Session::has('registerSuccess'))
    <div class="alert alert-success" role="alert">
        {{Session::get('registerSuccess')}}
    </div>
@endif
    <h3>Welcome&nbsp;{{Auth::user()->surname}}&nbsp;{{Auth::user()->firstname}}</h3><br>
    <ul style="list-style-type:none;">
        <li>We have alot to offer you and for you to learn.</li><br>
        <li>Keep exploring our website.</li><br>
        <li>We have lot of vocational choices on different personality types called RIASEC--Realistic, Investigative, Artisitic, Social, Enterprising and Conventional.</li><br>
        <li>There is career test to help you know your personality type and the different vocational choices you can take.</li><br>
        <li>You have a simple profile page which display pending career suggestion, pending career data request and career data granted.</li><br>
        <li>You have opportunity to request for career data and make suggestion on unavailable vocational career.</li>
</div>
@stop