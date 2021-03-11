<?php
/*
* user_profile
* Display show data of user
* @input -
* @output show data of user
* @author Thanach Jintakanont
* @Create Date 16-08-2563
*/
?>
@extends('menu')
@section('title','Profile')
@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}" />
<!-- Page wrapper -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"> Profile </li>
        </ol>
    </nav>
    <h2>Profile</h2>
<div class="well card mb-5 " style="max-width: 700px">
    <ul class="nav nav-tabs">
      <li class="active"><a href="#home" data-toggle="tab">Information</a></li>
      <li><a href="#tabpassword" data-toggle="tab">Password</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
      <div class="tab-pane active in" id="home">
      @foreach($result as $row)
        <form method="POST" enctype="multipart/form-data" id="tab" role="form">
                <br>
                <input type="hidden" id="num_form" value="1">
                <input type="hidden" name="user_id" id="user_id" value="{{$row->user_id}}">
                <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-left">Name <lable style="color:red;"> *</lable></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" id="full_name" value="{{$row->firstname.' '.$row->lastname}}" disabled> 
                        </div>
                </div>
                <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-left">Email <lable style="color:red;"> *</lable></label>
                        <div class="col-md-7">
                            <input type="text" class="form-control"  id="emailInform" value="{{$row->email}}"  disabled> 
                        </div>
                </div>
                <label>
                <button type="button" id="editInform" class="btn btn-secondary " style="position:absolute; left:30px; bottom:10px;" >Edit</button>
                <button type="button" id="cancel" name ="cancel" class="btn btn-secondary " style="position:absolute; right:105px; bottom:10px;" style="display:none;" >Cancel</button>
                <button type="submit" id="save" class="btn btn-success" style="position:absolute; right:20px; bottom:10px;" >Save</button>
                </label>
                <input type="hidden" name="_method" value="PATCH">
        </form>
      </div>
        <div class="tab-pane fade" id="tabpassword">
                <form id="tab2">
                <input type="hidden" id="num_form2" value="2">
                <input type="hidden" id="user_id_f2" value="{{$row->user_id}}">
                      <br>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">Email </label>
                            <div class="col-md-7" >  
                                {{$row->email}}
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">Current pasword<lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                                <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="password" name="password" disabled> 
                                <span class="invalid-feedback" role="alert">
                                    <strong>The given current password was invalid or blank</strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">New password <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                                <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="usernew_password" name="usernew_password" disabled> 
                                <span class="invalid-feedback" role="alert">
                                        <strong>The given New password was invalid or blank</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-left">Confirm password <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                            <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="usernew_password_confirmation" name="usernew_password_confirmation" disabled> 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>The given Confirm password was invalid or blank</strong>
                                    </span>
                            </div>
                        </div>
                        <label>
                        <button type="button" id="editpass" class="btn btn-secondary " style="position:absolute; left:30px; bottom:10px;" >Edit</button>
                        <button type="button" id="cancel2" name ="cancel" class="btn btn-secondary " style="position:absolute; right:105px; bottom:10px;" style="display:none;" >Cancel</button>
                        <button type="submit" id="save2" class="btn btn-success" style="position:absolute; right:20px; bottom:10px;" >Save</button>
                        </label>
                        <input type="hidden" name="_method" value="PATCH">
            
                </form>
        </div>
        @endforeach
  </div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
    document.getElementById("cancel").style.visibility = "hidden";
    document.getElementById("save").style.visibility = "hidden";
    document.getElementById("cancel2").style.visibility = "hidden";
    document.getElementById("save2").style.visibility = "hidden";
    $("#editInform").on("click",function(){
        document.getElementById("editInform").style.visibility = "hidden";
        document.getElementById("full_name").disabled = false;
        document.getElementById("emailInform").disabled = false;
        document.getElementById("save").style.visibility = "inherit";
        document.getElementById("cancel").style.visibility = "inherit";
    })
    $("#cancel").on("click",function(){
        document.getElementById("editInform").style.visibility = "inherit";
        document.getElementById("full_name").disabled = true;
        document.getElementById("emailInform").disabled = true;
        document.getElementById("save").style.visibility = "hidden";
        document.getElementById("cancel").style.visibility = "hidden";
        document.getElementById("full_name").classList.remove('is-invalid');
        document.getElementById("emailInform").classList.remove('is-invalid');
    })

    $("#tab").submit(function(e){
        e.preventDefault();
        var formData = new FormData();
            formData.append('num_form', $('#num_form').val());
            formData.append('user_id', $('#user_id').val());
            formData.append('full_name', $('#full_name').val());
            formData.append('email', $('#emailInform').val());
            console.log($('#full_name').val());
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:"{{ route('UpdateUserProfile') }}",
            data:formData,
            contentType: false,
            processData: false,
            dataType: "json",statusCode: {
                500: function() {
                    $('#full_name').addClass('is-invalid');
                }
            },
           success:function(response){
            document.getElementById("editInform").style.visibility = "inherit";
            document.getElementById("full_name").disabled = true;
            document.getElementById("emailInform").disabled = true;
            document.getElementById("save").style.visibility = "hidden";
            document.getElementById("cancel").style.visibility = "hidden";
            var emailuser = response['data'].email;
            document.getElementById("email_display").innerHTML = emailuser;
            document.getElementById("full_name").classList.remove('is-invalid');
            document.getElementById("emailInform").classList.remove('is-invalid');
           },
           error:function(data){
            if(data.responseJSON.errors){
                if(data.responseJSON.errors.full_name && data.responseJSON.errors.email){
                    $('#full_name').addClass('is-invalid');
                    $('#email').addClass('is-invalid');
                }else if(data.responseJSON.errors.full_name){
                    $('#full_name').addClass('is-invalid');
                }else{
                    $('#full_name').addClass('is-invalid');
                    $('#email').addClass('is-invalid');
                }
               }
           }

        });
    });
})

$("#editpass").on("click",function(){
        document.getElementById("editpass").style.visibility = "hidden";
        document.getElementById("password").disabled = false;
        document.getElementById("usernew_password").disabled = false;
        document.getElementById("usernew_password_confirmation").disabled = false;
        document.getElementById("save2").style.visibility = "inherit";
        document.getElementById("cancel2").style.visibility = "inherit";
    })
$("#cancel2").on("click",function(){
    document.getElementById("editpass").style.visibility = "inherit";
        document.getElementById("password").disabled = true;
        document.getElementById("usernew_password").disabled = true;
        document.getElementById("usernew_password_confirmation").disabled = true;
        document.getElementById("save2").style.visibility = "hidden";
        document.getElementById("cancel2").style.visibility = "hidden";
        document.getElementById("password").classList.remove('is-invalid');
        document.getElementById("usernew_password").classList.remove('is-invalid');
        document.getElementById("usernew_password_confirmation").classList.remove('is-invalid');
})
$("#tab2").submit(function(e){
        e.preventDefault();
        var formData = new FormData();
           formData.append('num_form', $('#num_form2').val());
           formData.append('user_id', $('#user_id').val());
           formData.append('password', $('#password').val());
           formData.append('usernew_password', $('#usernew_password').val());
           formData.append('usernew_password_confirmation', $('#usernew_password_confirmation').val());
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            type:'POST',
            url:"{{ route('UpdateUserProfile') }}",
            data:formData,
            contentType: false,
            processData: false,
            dataType: "json",statusCode: {
                500: function(data) {
                    console.log("500",data);
                    $('#password').addClass('is-invalid');
                }
            },
           success:function(data){
               if(data.success){
                $('#password').val("");
                $('#usernew_password').val("");
                $('#usernew_password_confirmation').val("");
                document.getElementById("editpass").style.visibility = "inherit";
                document.getElementById("password").disabled = true;
                document.getElementById("usernew_password").disabled = true;
                document.getElementById("usernew_password_confirmation").disabled = true;
                document.getElementById("save2").style.visibility = "hidden";
                document.getElementById("cancel2").style.visibility = "hidden";
                document.getElementById("password").classList.remove('is-invalid');
                document.getElementById("usernew_password").classList.remove('is-invalid');
                document.getElementById("usernew_password_confirmation").classList.remove('is-invalid');
                }
           },
           error:function(data){
               if(data.responseJSON.errors){
               if(data.responseJSON.errors.usernew_password_confirmation && data.responseJSON.errors.password){
                $('#password').addClass('is-invalid');
                $('#usernew_password').addClass('is-invalid');
                $('#usernew_password_confirmation').addClass('is-invalid');
               }else if(data.responseJSON.errors.usernew_password_confirmation || data.responseJSON.errors.usernew_password){
                $('#usernew_password').addClass('is-invalid');
                $('#usernew_password_confirmation').addClass('is-invalid');
               }
           }
           }
        });
    });
</script>

<style>
img {
      border:2px solid black;
}
.container {
    width: 50%;
    height: 100%;
    overflow: hidden;
}
.nav {
    margin-bottom: 2rem;
}
button.btn {
    border: 0.5px solid orange;
    background-color: orange;
}
.card{
    border: 0.5px solid gray;
    padding: 2rem 2rem;
    margin: 0 auto; /* Added */
    float: none; /* Added */
    margin-bottom: 20px; /* Added */
}
</style>
@stop