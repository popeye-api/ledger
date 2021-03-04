@extends('menu')
@section('title','ledger')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item " aria-current="page">Ledger account</li>
        <li class="breadcrumb-item " aria-current="page">2020</li>
        <li class="breadcrumb-item active" aria-current="page">Detail 01/01/2020</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Detail 01/01/2020
    <a class="nav-link d-flex align-items-center py-0" style="color:black; float:right;" href="{{ url('v_ledger') }}">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-return-left menu-icon" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M14.5 1.5a.5.5 0 0 1 .5.5v4.8a2.5 2.5 0 0 1-2.5 2.5H2.707l3.347 3.346a.5.5 0 0 1-.708.708l-4.2-4.2a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 8.3H12.5A1.5 1.5 0 0 0 14 6.8V2a.5.5 0 0 1 .5-.5z"/>
        </svg>
    </a></h3><hr>
    <div class="container">
        <table id="table" class="table table-bordered" style="width:100% border-radius:5px;">
            <colgroup>
                <col width="450">
                <col width="">
                <col width="">
            </colgroup>
            <thead class="thead-dark">
                <tr>
                    <th scope="col" style="text-align:center;">Product Name</th>
                    <th scope="col" style="text-align:center;">Type</th>
                    <th scope="col" style="text-align:center;">Balance</th>
                </tr>
            </thead>       
            <tbody> 
                <tr>
                    <td scope="col" style="" >Win the lottery</td>
                    <td scope="col" style="text-align:center;" >income</td>
                    <td scope="col" style="text-align:center; color:green;" >+20</td>
                </tr>
                <tr>
                    <td scope="col" style="" >salary</td>
                    <td scope="col" style="text-align:center;" >income</td>
                    <td scope="col" style="text-align:center; color:green;" >+20</td>
                </tr>
                <tr>
                    <td scope="col" style="" >Buy candy</td>
                    <td scope="col" style="text-align:center;" >expense</td>
                    <td scope="col" style="text-align:center; color:red;" >-20</td>
                </tr>
                <tr>
                    <td scope="col" style="text-align:center;" colspan="2" style="" >Total</td>
                    <td scope="col" style="text-align:center; color:green;" >20</td>
                </tr>
            </tbody>
        </table><br>
    </div>    

</div>



    @section('script')
    <script>

    
    </script>
    @stop
@stop