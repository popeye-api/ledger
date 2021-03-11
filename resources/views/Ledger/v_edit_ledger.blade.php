@extends('menu')
@section('title','edit ledger account')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


.card {
    margin: 0 auto; /* Added */
         /* Added */
}

    

</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Ledger account</li>
        <li class="breadcrumb-item active" aria-current="page">Edit ledger account</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Edit ledger
        <a class="nav-link d-flex align-items-center py-0 clickable-row" style="color:black; float:right;" href="">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </a>
    </h3>
    <hr>
<div class="card shadow-lg bg-white  item-center " style="max-width:65rem;">
    <div class="card-header bg-dark" style="color:white;"><b>EDIT STATEMENT</b></div>
    <div class="card-body">
    @foreach($result as $row)
<form method="post" class="col-md-12 text-center" action="{{route('v_update', $row->log_id)}}">
    {{csrf_field()}}
    
    <div class="form-group">
        <label class = "col-md-3 text-right"> Date </label>
        <label class = "col-md-1"> &emsp; : </label>
        <p class = "col-md-6 text-left">{{$row->created_date}}</p>
    </div><br><br>
    <div class="form-group">
        <label class = "col-md-3 text-right"> Product Name </label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6"> <input class="form-control" type="text" name="product_name" id="product_name" value = "{{$row->product_name}}"></label>
    </div><br><br>
    <div class="form-group">
        <label class = "col-md-3 text-right" >Type </label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6" style = "">
            <select class="form-control" id="type" name="type" aria-label="Default select example"> 
                <option value="1">income</option>
                @if ($row->log_type_id == 2)
                <option value="2" selected>expense</option>
                @elseif ($row->log_type_id == 1)
                <option value="2">expense</option>
                @endif
            </select>
        </label>
    </div><br><br>
    <div class="form-group ">
        <label class = "col-md-3 text-right">Balance  </label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6"><input class="form-control" type="text" name="balance" id="balance" value = "{{$row->balance}}">  </label>
    </div><br><br>
    <div class="form-group ">
        <label class="col-md-3 text-right" >Description  </label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class="col-md-6 "><input class="form-control" name="description" id="description" type="text" value = "{{$row->description}}">  </label>
    </div><br><br>
    <div class="form-group col-md-12 text-center">
        <a href="{{action('Ledger_controller@show_ledger_detail',$row->created_at)}}" class="btn btn-secondary">Cancel</a>
        @endforeach 
        <button type="submit" class="btn btn-primary"> Submit</button>
    </div><br><br>
    <input type="hidden" name="_method" value="put">
  </form>
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