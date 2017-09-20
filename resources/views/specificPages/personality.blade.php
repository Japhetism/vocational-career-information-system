@extends('main')
@section('title', '| Personality')
@section('link', 'Personality Type')
@section('content')
<div class="col-md-8" style="text-align:justify">
{{$personality->name}}
{{$personality->description}}
</div>
@stop