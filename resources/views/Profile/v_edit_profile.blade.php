<?php
/*
* modal edit_profile
* Display edit form of profile detail
* @input image, name, lastname, or email
* @output change data of user in database
* @author Witthaya Thepnuan
* @Create Date 29-08-2563
*/
?>

<div class="modal fade bd-editProfile-modal-lg" id ="modalEditProfile" data-backdrop="static" tabindex="-1" data-keyboard="false" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true" >
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">แก้ไขข้อมูลส่วนตัว</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                </div>
            <div class="modal-body form-group">
                    <!-- Start Input user Form -->
                    <form method="POST" enctype="multipart/form-data" id="editprofile" role="form">
                            <input type="hidden" id="num_form" value="1">
                            <input type="hidden" name="user_id" id="user_id" value="{{$row->user_id}}">
                            <div class="form-group row">
                                <label class="col-md-12 col-form-label form-group"></label>
                                    <label class="col-md-2 col-form-label form-group" style="text-align:left;">ชื่อ-นามสกุล <lable style="color:red;"> *</lable></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control" onfocus="reClassInValid(this.id)" placeholder="ชื่อ นามสกุล" id="full_name" name="full_name" value="{{$row->firstname.' '.$row->lastname}}" > 
                                            <span class="invalid-feedback" role="alert">
                                                <strong>โปรดตรวจสอบ ชื่อ-นามสกุล</strong>
                                            </span>
                                        </div>
                                    <label class="col-md-2 col-form-label form-group" style="text-align:left;">อีเมล <lable style="color:red;"> *</lable></label>
                                        <div class="col-md-10">
                                            <input type="text" class="form-control"  onfocus="reClassInValid(this.id)" placeholder="อีเมล" id="email" name="email" value="{{$row->email}}"> 
                                            <span class="invalid-feedback" role="alert">
                                                <strong>โปรดตรวจสอบอีเมล</strong>
                                            </span>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-dark" data-dismiss="modal" aria-label="Close">ยกเลิก</button>
                                    <button type="submit" class="btn btn-success" name="ยืนยัน"> ยืนยัน </button>
                                </div>
                                <input type="hidden" name="_method" value="PATCH">
                            </form>
                    <!-- End Input user Form -->
                    <div class="alert alert-dismissible" role="alertEprofile" style="display:none;">
                    <strong>Warning!</strong> 
                    <p>ตรวจสอบข้อมูลอีกครั้ง.</p>
                    </div>
            </div>             
        </div>
    </div>
</div>
<style>
#display-image-preview {
  margin-left: auto;
  margin-right: auto;
}
#divcenter{
    text-align: center;
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type="text/javascript">
    $("#editprofile").submit(function(e){
        e.preventDefault();
        var formData = new FormData();
            formData.append('num_form', $('#num_form').val());
            formData.append('user_id', $('#user_id').val());
            formData.append('full_name', $('#full_name').val());
            formData.append('email', $('#email').val());
        $.ajax({
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
                var fullnameuser = response['data'].first_name+" "+response['data'].last_name;
                var emailuser = response['data'].email;
                document.getElementById("full_name_display").innerHTML = fullnameuser;
                document.getElementById("email_display").innerHTML = emailuser;
                $('#modalEditProfile').modal('hide');
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
</script>

