@extends('menu')
@section('title','add ledger account')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

.form-control::-webkit-input-placeholder{
            text-align: center;
        }
        optgroup{
            
        } 

</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page">Ledger account</li>
        <li class="breadcrumb-item active" aria-current="page">Add ledger account</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Add ledger account</h3><hr>
    
    <div class="">
    <div class="list-group list-group-flush">
        <li class="list-group-item">
                <label class="col-sm-1 " style = "padding : 6px; text-align : right;"> Date </label>
                <label class="col-sm-2 " style = ""> <input class="form-control" type="text" placeholder="05/03/2021" disabled>   </label>
        </li>
        <li class="list-group-item">
                <label class="col-md-2 " style = "padding : 6px; text-align : center;"> Product Name  </label>
                <label class="col-md-3 " style = ""> <input class="form-control" type="text" placeholder="Default input" value = "แม่เมตตา">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;;">Type  </label>
                <label class="col-md-1 " style = "">
                    <select class="form-control" style = "width: 104px; overflow: hidden; font-size:14px;" aria-label="Default select example">
                    <optgroup>
                        <option value="1" >income</option>
                        <option value="2">expense</option>
                    </optgroup>
                    </select>
                </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Balance  </label>
                <label class="col-md-1 "><input class="form-control" type="text" placeholder="+200">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Description  </label>
                <label class="col-md-2 "><input class="form-control" type="text" placeholder="-">  </label>
        </li>
        <li class="list-group-item">
                <label class="col-md-2 " style = "padding : 6px; text-align : center;"> Product Name  </label>
                <label class="col-md-3 " style = ""> <input class="form-control" type="text" value = "เจอตกอยู่แถวสะพานลอย">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;;">Type  </label>
                <label class="col-md-1 " style = "">
                    <select class="form-control" style = "width: 104px; overflow: hidden; font-size:14px;" aria-label="Default select example">
                    <optgroup>
                        <option value="1" >income</option>
                        <option value="2">expense</option>
                    </optgroup>
                    </select>
                </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Balance  </label>
                <label class="col-md-1 "><input class="form-control" type="text" placeholder="+500">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Description  </label>
                <label class="col-md-2 "><input class="form-control" type="text" placeholder="-">  </label>
        </li>
        <li class="list-group-item">
                <label class="col-md-2 " style = "padding : 6px; text-align : center;"> Product Name  </label>
                <label class="col-md-3 " style = ""> <input class="form-control" type="text" placeholder="-" value = "ค่าของ">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;;">Type  </label>
                <label class="col-md-1 " style = "">
                    <select class="form-control" style = "width: 104px; overflow: hidden; font-size:14px;" aria-label="Default select example">
                    <optgroup>
                        <option value="2">expense</option>
                        <option value="1" >income</option>    
                    </optgroup>
                    </select>
                </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Balance  </label>
                <label class="col-md-1 "><input class="form-control" type="text" placeholder="-500">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Description  </label>
                <label class="col-md-2 "><input class="form-control" type="text" placeholder="-">  </label>
        </li>
        <li class="list-group-item">
                <label class="col-md-2 " style = "padding : 6px; text-align : center;"> Product Name  </label>
                <label class="col-md-3 " style = ""> <input class="form-control" type="text" placeholder="-">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;;">Type  </label>
                <label class="col-md-1 " style = "">
                    <select class="form-control" style = "width: 104px; overflow: hidden; font-size:14px;" aria-label="Default select example">
                    <optgroup>
                        <option value="1" >income</option>
                        <option value="2">expense</option>
                    </optgroup>
                    </select>
                </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Balance  </label>
                <label class="col-md-1 "><input class="form-control" type="text" placeholder="-">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Description  </label>
                <label class="col-md-2 "><input class="form-control" type="text" placeholder="-">  </label>
        </li>
        <li class="list-group-item">
                <label class="col-md-2 " style = "padding : 6px; text-align : center;"> Product Name  </label>
                <label class="col-md-3 " style = ""> <input class="form-control" type="text" placeholder="-">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;;">Type  </label>
                <label class="col-md-1 " style = "">
                    <select class="form-control" style = "width: 104px; overflow: hidden; font-size:14px;" aria-label="Default select example">
                    <optgroup>
                        <option value="1" >income</option>
                        <option value="2">expense</option>
                    </optgroup>
                    </select>
                </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Balance  </label>
                <label class="col-md-1 "><input class="form-control" type="text" placeholder="-">  </label>
                <label class="col-md-1 " style = "padding : 6px; text-align : center;">Description  </label>
                <label class="col-md-2 "><input class="form-control" type="text" placeholder="-">  </label>
        </li>
    </div>

</div>



    @section('script')
    <script>
    </script>
    @stop
@stop