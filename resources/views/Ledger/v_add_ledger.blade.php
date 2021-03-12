@extends('menu')
@section('title','add ledger account')

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
        <li class="breadcrumb-item active" aria-current="page">Add ledger account</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Add ledger
        <a class="nav-link d-flex align-items-center py-0" style="color:black; float:right;" href="{{ url('v_ledger') }}">
            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
            </svg>
        </a>
    </h3>
    <hr>
<div class="card shadow-lg bg-white  item-center " style="max-width:65rem;">
    <div class="card-header bg-dark" style="color:white;"><b>ADD STATEMENT</b></div>
    <div class="card-body">

<form method="post" class="col-md-12 text-center" action="{{action('Ledger_controller@store')}}">
    {{csrf_field()}}
    <div class="form-group">
        <label class = "col-md-3 text-right"> Date </label>
        <label class = "col-md-1"> &emsp; : </label>
        <p class = "col-md-6 text-left"><?php  echo date("d/m/Y"); ?></p>
    </div><br><br>
    <div class="form-group">
        <label class = "col-md-3 text-right"> Product Name <text style="color:red;">*</text></label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6"> <input class="form-control" type="text" name="product_name" id="product_name"></label>
    </div><br><br>
    <div class="form-group">
        <label class = "col-md-3 text-right" >Type <text style="color:red;">*</text></label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6" style = "">
            <select class="form-control" id="type" name="type" aria-label="Default select example">
                <option value="1">income</option>
                <option value="2">expense</option>
            </select>
        </label>
    </div><br><br>
    <div class="form-group ">
        <label class = "col-md-3 text-right">Balance <text style="color:red;">*</text></label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class = "col-md-6"><input class="form-control" type="text" name="balance" id="balance" placeholder="">  </label>
    </div><br><br>
    <div class="form-group ">
        <label class="col-md-3 text-right" >Description <text style="color:red;">*</text></label>
        <label class = "col-md-1"> &emsp; : </label>
        <label class="col-md-6 "><input class="form-control" name="description" id="description" type="text" placeholder="" >  </label>
    </div><br><br>
    <div class="form-group col-md-12 text-center">
        <a href="{{ 'v_ledger' }}"  class="btn btn-secondary">Cancel</a>
        <button type="submit" style="background-color:#FF7A33;" class="btn btn-primary">Submit</button>
    </div><br><br>
  </form>
</div>
</div>



    @section('script')
    <script>
    </script>
    @stop
@stop