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
@extends('layouts.app')
@section('title','user profile')
@section('content')
    <!-- Page wrapper -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">ข้อมูลส่วนตัว</li>
        </ol>
    </nav>
    <div class="container-fluid">
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h4>ข้อมูลส่วนตัว</h4>
                    @foreach($result as $row)
                    <!-- edit button -->
                    <button type="button" class="btn btn-secondary bd-editProfile-modal-lg" data-toggle="modal" data-target=".bd-editProfile-modal-lg"  style="position:absolute; right:20px; top:10px;" ><a class="nav-link d-flex align-items-center py-0 text-white">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                        <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                        <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                        <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                        </svg></a>
                    </button>
                </div>
                <div class="card-body">
                    <label class="col-md-8 col-form-label form-group" text-agiln:center;>
                        <label class="col-md-3 col-form-label " style="text-align:left;"><h5>ชื่อ-นามสกุล</h5></label>
                        <label style="text-align:left;"><h5>:</h5></label>
                        <label class="col-md-8 col-form-label "><h5 id="full_name_display" >{{$row->firstname.'  '.$row->lastname}}</h5></label>
                        <label class="col-md-3 col-form-label " style="text-align:left;"><h5>อีเมล</h5></label>
                        <label style="text-align:left;"><h5>:</h5></label>
                        <label class="col-md-8 col-form-label "><h5 id="email_display">{{$row->email}}</h5></label>
                    </label>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="container">
            <div class="card mb-3">
                <div class="card-header">
                    <h4>แก้ไขรหัสผ่าน</h4>
                    <button type="button" class="btn btn-secondary bd-editPassword-modal-lg" data-toggle="modal" data-target="#modalEditPassword" style="position:absolute; right:20px; top:10px;" ><a class="nav-link d-flex align-items-center py-0 text-white">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                            <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                            <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                            <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                        </svg></a>
                    </button>
                </div>
                <div class="card-body">
                    <h5>
                        <label class="col-sm-2 col-form-label " style="text-align:left;"><h5>ชื่อผู้ใช้งาน</h5></label>
                        <label style="text-align:left;"><h5>:</h5></label>
                        <label class="col-sm-9 col-form-label "><h5>{{$row->email}}</h5></label>
                        <label class="col-sm-2 col-form-label " style="text-align:left;"><h5>รหัสผ่าน</h5></label>
                        <label style="text-align:left;"><h5>:</h5></label>
                        <label class="col-sm-9 col-form-label "><h5>********</h5></label>   
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- modal edit profile-->
    @extends('Profile.v_edit_profile')
    <!-- modal edit password-->
    @extends('Profile.v_edit_password')
<style>
  img {
      border:2px solid black;
  }
</style>
@stop