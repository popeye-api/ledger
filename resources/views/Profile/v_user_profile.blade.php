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
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    
<!-- Page wrapper -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page"> Profile </li>
        </ol>
    </nav>
    
    <h2>Profile</h2>
    <div class="card mb-5" style="max-width: 540px">
        <div class="container">
            <nav class="nav nav-tabs" role="tablist">
                <a class="nav-link active" style="color:black;" id="nav-info-tab" data-toggle="tab" href="#nav-info" role="tab" aria-controls="nav-information" aria-selected="true"> Information </a>
                <a class="nav-link" style="color:black;" id="nav-pwd-tab" data-toggle="tab" href="#nav-pwd" role="tab" aria-controls="nav-password" aria-selected="false"> Password </a>
            </nav>
            <div class="card-body">
                <div class="tab-content" id="nav-tabContent">
                 <!-- tab information -->
                    <div class="tab-pane fade show active" id="nav-info" role="tabpanel" aria-labelledby="nav-info-tab">
                        <form action ='information'>
                            <div class="form-group"></div>
                                <button class="btn float-right"><i class="fa fa-pencil"></i></button><br>
                                    <p class="card-text">
                                        <p for="name" class="col-sm-8"> Name: Koko Hekmatyar</p>
                                        <p for="email" class="col-sm-8"> Email: koko_h@hcli.com</p>
                                    </p>
                            </div>
                        </form>
                    </div>    
            
                <!-- tab password -->
                    <!-- <div class="tab-pane fade" id="nav-pwd" role="tabpanel" aria-labelledby="nav-pwd-tab">
                        <form action='password'>
                            <div class="form-group">
                                <button class="btn float-right"><i class="fa fa-pencil"></i></button><br>
                                    <p class="card-text">
                                        <p for="email" class="col-sm-8"> Email: koko_h@hcli.com </p>
                                        <p for="name" class="col-sm-8"> Password: ******** </p>
                                    </p>
                            </div>
                        </form>
                    </div> -->
                </div>
            </div>
        </div> 
    </div>
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