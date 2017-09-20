@extends('main')
@section('title', '| Admin')
@section('link', 'Admin')
@section('content')
<div class="errorResponse"></div>
<div class="panel panel-default" id="personalityPanel">
  <div class="panel-heading">
    <h3 class="panel-title">Personality Panel<a href="" id="addPersonality" class="pull-right" data-toggle="modal" data-target="#personalityModal"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
  </div>
  <div class="panel-body">
    <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>Id</th>
      <th>Name</th>
      <th>Description</th>
      <th>Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($personalities as $personality)
    
    <tr>
      <th scope="row">{{$personality->id}}</th>
      <td>{{ $personality->name }}</td>
      <td>{{ $personality->description }}</td>
      <td>
      <ul class="nav navbar-nav navbar-right" style="margin-top:5px; font-size:18px;">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"  style="color:white;" role="button" aria-expanded="false">
            action <span class="caret"></span>
          </a>
          <ul class="dropdown-menu" role="menu" style="background-color:crimson; font-size:16px;">
            <li><a href="{{ route('profile') }}" style="color:black;">View Profile</a></li>
            <li><a href="#" style="color:black;">Edit Profile</a></li>
            <li><a href="{{ url('/request') }}" style="color:black;">Career Request</a></li>
            <li><a href="{{ route('suggestion') }}" style="color:black;">Career Suggestion</a></li>
            <li><a href="#" style="color:black;">Deactivate Account </a></li>
          </ul>
        </li>
    </ul>
    </td>
    </tr>
  @endforeach  
  </tbody>
</table>
 <div style="text-align:center;">
        {{ $personalities->links() }} 
      </div>
     
  </div>
</div>

<div class="panel panel-default">
  <div class="panel-heading">
    <h3 class="panel-title">User Panel<a href="" id="addUser" class="pull-right" data-toggle="modal" data-target="#userModal"><i class="fa fa-plus" aria-hidden="true"></i></a></h3>
  </div>
  <div class="panel-body">
    User Panel Here
  </div>
</div>
<!-- Personality Modal  -->
<div class="modal fade" id="personalityModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background-color:snow;" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title"><strong>Add New Personality</strong></h4>
      </div>
      <div class="modal-body">
      <div class="error"></div>
      <label>Personality Title:</label>
      <input type="text" class="form-control" placeholder="Enter Personality Title" name="personalityTitle" id="personalityTitle"><br>
      <label>Personality Description:</label>
      <textarea class="form-control" name="personalityDesc" id="personalityDesc" placeholder="Enter Personality Description" cols="10" rows="5"></textarea>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="deletePersonality" style="display:none"><i class="fa fa-check"></i> Ok</button>
        <button type="button" class="btn btn-success" id="saveChangesPersonality" style="display:none"><i class="fa fa-save"></i> Save changes</button>
        <button type="button" class="btn btn-primary" id="addNewPersonality" style="display:none"><i class="fa fa-plus"></i> Add New Personality</button>
        <button type="button" class="btn btn-default" id="closePersonality"><i class="fa fa-times"></i> Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- User Modal -->
<div class="modal fade" id="userModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" >
  <div class="modal-dialog" role="document" >
    <div class="modal-content" style="background-color:snow;" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="title">Add New User</h4>
      </div>
      <div class="modal-body">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-warning" id="delete"><i class="fa fa-check"></i> Ok</button>
        <button type="button" class="btn btn-success" id="saveChanges"><i class="fa fa-save"></i> Save changes</button>
        <button type="button" class="btn btn-primary" id="addButton"><i class="fa fa-plus"></i> Add Item</button>
        <button type="button" class="btn btn-default" id="closeButton"><i class="fa fa-times"></i> Cancel</button>
      </div>
    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
{{ csrf_field() }}

<script>
$(document).ready(function(){
         $(document).on('click', '#addPersonality', function(event){
                $('#personalityTitle').val("");
                $('#personalityDesc').val("");
                $('#title').text('Add New Personality');
                $('#deletePersonality').hide(400);
                $('#saveChangesPerosnality').hide(400);
                $('#addNewPersonality').show(400);
            });

            $('#closePersonality').click(function(event){
              $('#closePersonality').attr('data-dismiss', 'modal');
               $('#personalityPanel').load(location.href + ' #personalityPanel'); 
              
            });

            $('#addNewPersonality').click(function(event){
                var title = $('#personalityTitle').val();
                var desc = $('#personalityDesc').val();
                if(title == "" || desc == ""){
                  $('.error').html("<span style='color:red;'>All fields are required.</span>");
                }else{
                  $('#addNewPersonality').attr('data-dismiss', 'modal');
                  $.post('/uploadPersonality', {'name': title, 'description':desc, '_token':$('input[name=_token]').val()}, function(data){
                    $('.errorResponse').addClass('alert alert-success');
                    $('.errorResponse').html('<span>Successfully added</span>');
                    console.log(data);
                    $('#personalityPanel').load(location.href + ' #personalityPanel'); 
                  });
               }
            });


    });
</script>

@stop