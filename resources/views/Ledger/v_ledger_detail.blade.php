@extends('menu')
@section('title','ledger')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page">Ledger account</li>
        <li class="breadcrumb-item active" aria-current="page">Detail <?php foreach($result as $row){
        echo $row->created_at;
        break;
    }
    ?></li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Detail 
    <?php foreach($result as $row){
        echo $row->created_at;
        break;
    }
    ?>
    <a class="nav-link d-flex align-items-center py-0" style="color:black; float:right;" href="{{ url('v_ledger') }}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        </svg>
    </a></h3><hr>
    <div class="container">
        <table id="table" class="table table-bordered" style="width:100% border-radius:5px;">
            <colgroup>
                <col width="200">
                <col width="300">
                <col width="200">
                <col width="200">
                <col width="200">
            </colgroup>
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center;">Product Name</th>
                    <th scope="col" style="text-align:center;">Description</th>
                    <th scope="col" style="text-align:center;">Type</th>
                    <th scope="col" style="text-align:center;">Balance</th>
                    <th scope="col" style="text-align:center;">Operater</th>
                </tr>
            </thead>       
            <tbody>
            <?php $sum = 0;?>
            @foreach($result as $row)
                <tr>
                    <td scope="col" style="" >{{$row->product_name}}</td>
                    <td scope="col" style="text-align:left;" >{{$row->description}}</td>
                    <td scope="col" style="text-align:center;" >{{$row->type_name}}</td>
                    @if($row->log_type_id == 1)
                        <td scope="col" style="text-align:right; color:green;" >{{$row->balance}}</td>
                    @else
                        <td scope="col" style="text-align:right; color:red;" >{{$row->balance}}</td>
                        <?php $row->balance = -($row->balance) ?>
                    @endif
                    <td class="text-center">
                        <button type="button" id="customer_edit_button" class="btn btn-warning text-dark d" data-toggle="modal" data-target=".bd-edit-modal-lg" style="background:orange;" >
                            <a class="nav-link d-flex align-items-center py-0 clickable-row" style="color:#6D6D6D;" data-href="{{action('Ledger_controller@show_ledger_edit',$row->log_id)}}">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                                    <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                                    <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                                    <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                                </svg>
                            </a>
                        </button>
                        <button type="button" class="btn btn-danger text-dark d" data-toggle="modal" data-target="#delete" style="">
                            <a class="nav-link d-flex align-items-center py-0" style="color:#6D6D6D;" href="">
                                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                </svg>
                            </a>
                        </button>
                        </td>
                        
                </tr>
                <?php $sum += $row->balance ?>
            @endforeach   
            <tr>
                <td scope="col" style="text-align:center;" colspan="3" style="" >Total</td>
                <td scope="col" style="text-align:right;" >{{$sum}}</td>
                <td scope="col" style="" ></td>
            </tr> 
            </tbody>
        </table><br>
    </div>    
</div>



    @section('script')
    <script>
    jQuery(document).ready(function($) {
        $(".clickable-row").click(function() {
            window.location.href  = $(this).data("href");
        });
    });
    
    </script>
    @stop
@stop