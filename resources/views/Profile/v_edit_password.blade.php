<?php
/*
* modal edit_password
* Display modal form for edit password of user
* @input new password
* @output password change
* @author Witthaya Thepnuan
* @Create Date 29-08-2563
*/
?>
<div class="modal fade bd-editPassword-modal-lg" id="modalEditPassword" data-backdrop="static" tabindex="-1" data-keyboard="false" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">แก้ไขรหัสผ่าน</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body form-group">
            <!-- Start Input user Form -->
            <form method="PUT" id="passwordEdit" runat="server" enctype="multipart/form-data"> 
            <input type="hidden" id="num_form2" value="2">
                <input type="hidden" id="user_id_f2" value="{{$row->user_id}}">
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">ชื่อผู้ใช้งาน <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                                <input type="text" class="form-control"   placeholder="{{$row->email}}" name="first_name" disabled> 
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">รหัสผ่านเดิม <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                                <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="password" name="password" > 
                                <span class="invalid-feedback" role="alert">
                                    <strong>โปรดตรวจสอบรหัสผ่านเดิม</strong>
                                </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">รหัสผ่านใหม่ <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                                <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="usernew_password" name="usernew_password" > 
                                <span class="invalid-feedback" role="alert">
                                        <strong>โปรดตรวจสอบรหัสผ่านใหม่</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-3 col-form-label text-md-left">ยืนยันรหัสผ่านใหม่ <lable style="color:red;"> *</lable></label>
                            <div class="col-md-7">
                            <input type="password" class="form-control" onfocus="reClassInValid(this.id)" id="usernew_password_confirmation" name="usernew_password_confirmation"> 
                                    <span class="invalid-feedback" role="alert">
                                        <strong>โปรดตรวจสอบยืนยันรหัสผ่านใหม่</strong>
                                    </span>
                            </div>
                        </div>
                        <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                        <button type="submit" class="btn btn-success" name="ยืนยัน"> ยืนยัน </button>
                        </div>
                    </form>
            <!-- End Input user Form -->
            <div class="alert alert-dismissible" role="alertEpassword" style="display:none;">
            <strong>Warning!</strong> 
            <p>ตรวจสอบข้อมูลอีกครั้ง.</p>
            </div>
            </div>             
        </div>
    </div>
</div>
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
 $(document).ready(function () {
    $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

$("#passwordEdit").submit(function(e){
        e.preventDefault();
        var formData = new FormData();
           formData.append('num_form', $('#num_form2').val());
           formData.append('user_id', $('#user_id').val());
           formData.append('password', $('#password').val());
           formData.append('usernew_password', $('#usernew_password').val());
           formData.append('usernew_password_confirmation', $('#usernew_password_confirmation').val());
        $.ajax({
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
                $('#modalEditPassword').modal('hide');
                $('#password').val("");
                $('#usernew_password').val("");
                $('#usernew_password_confirmation').val("");
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
           console.log(data);
           }
        });
    });
});
</script>