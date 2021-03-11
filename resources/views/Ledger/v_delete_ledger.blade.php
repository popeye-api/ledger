<?php
/*
* v_modal_delete_case
* Display input form for delete case
* @input -
* @output input form for delete case
* @author Kittichi Tanamai
* @Create Date 12-10-2563
*/
?>
<!DOCTYPE html>
    <!-- modal delete-->
    <div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Delete ledger</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="post" action="{{action('Ledger_controller@destroy',$row->log_id)}}">
                {{csrf_field()}}
                    <div class="modal-body">
                        <p>Please press confirm to delete ledger information. </p>
                    </div>
                    <div class="modal-footer">
                            <button type="button" class="btn btn-light" data-dismiss="modal" >ยกเลิก</button>
                            <button type="submit" class="btn btn-primary" value = "อัพเดท">ยืนยัน</button>
                    </div>
                    <input type="hidden" name="_method" value="DELETE">
                </form>
            </div>
        </div>
    </div>