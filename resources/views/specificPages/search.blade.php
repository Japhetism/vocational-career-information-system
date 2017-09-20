@extends('main')
@section('title', '| Search')
@section('link', 'Search')
@section('content')
<form method="post" action="">
    <input type="text" class="form-control" name="searchWord" value="" placeholder="Search Criteria"><br>
    <div class="col span_1_of_2">
    <!-- <input type="submit" name="Search" value="Search"> -->
    </div>
    <div class="col span_1_of_2">
        <button type="submit" class="btn btn-primary" name="searchVC">Search</button><br><br>
    </div>
</form>
@stop