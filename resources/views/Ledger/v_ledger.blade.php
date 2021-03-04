@extends('menu')
@section('title','ledger')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
.dropbtn {
  background-color: #3498DB;
  color: white;
  padding: 5px 10px;
  font-size: 26px;
  border: none;
  cursor: pointer;
  width: 1000px;

}

.dropdown {
  position: relative;

}

.dropdown-content {
  display: none;
  position: static;
  margin: auto;
  width:985px;
  background-color: #f1f1f1;
  z-index: 1;
  border: 1px solid silver;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;

  display: block;
  width: 985px;
  border-bottom: 1px solid silver;
}

.dropdown a:hover {
    color: black;
    background-color: #ddd;
    margin: auto;
}

.show {
    display: block;
}

.bi-caret-right-fill{

}

.bi-caret-down-fill{
    color:#eb5b23;
    display: none;
}

.dropdown-year{
    position: relative;
    display: inline-block;
}

.dropbtn-year{
  background-color: #3498DB;
  color: white;
  padding: 5px 10px;
  font-size: 26px;
  border: none;
  cursor: pointer;
  width: 1050px;
}

.text-year:hover{
    color:#eb5b23;
}

.text-year:focus{
    color:#eb5b23;
}


.dropdown-content-year {
  display: none;
  position: static;
  margin: auto;
  background-color: #f1f1f1;
  text-decoration: none;
  color: black;
  width: 1040px;
  padding: 12px 16px;
  border: 1px solid silver;
  
}


</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">Ledger account</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>Ledger account</h3><hr>
    <button  type="button" class="btn btn-primary bd-add-modal-lg" ><a href="{{url('v_ledger_add')}}" class="nav-link d-flex align-items-center py-0 text-white">Add list</a></button>
    <div style="float:right;">Date <input type="date"> to <input type="date"> </div><br><br>
    <div class="container">
        <div class="dropdown-year">
            <div onclick="myFunction()" class="dropbtn-year bg-dark text-year" style="border-radius: 5px;">
                2020
            </div>
            <div id="myDropdown-year" class="dropdown-content-year drop-list-year">
                <div class="dropdown">
                    <div onclick="myFunction2()" class="dropbtn bg-dark text-year" style="border-radius: 5px;">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg> -->
                        January
                    </div>
                    <div id="myDropdown" class="dropdown-content drop-list text-year">
                        <!-- <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">01/01/2018<label style="color:green; float:right;" >+20</label>&nbsp;<label style="color:red; float:right;">dffd</label></a>
                        <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">02/01/2018<label style="color:red; float:right;">-100</label></a>
                        <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">03/01/2018<label style="color:green; float:right;">+500</label></a> -->
                        <table class="table table-hover">
                            <tr class="nav-link text-black"  style="cursor:pointer ">
                                <td scope="col" class="clickable-row" style="width:70%;" data-href="{{url('v_ledger_detail')}}" >01/01/2018</td>
                                <td scope="col" class="clickable-row" style="width:20%; color:green;" data-href="{{url('v_ledger_detail')}}" >+20</td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-warning text-dark  py-0" >
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                                            <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                                            <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                                            <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-danger text-dark  py-0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="nav-link text-black" style="cursor:pointer">
                                <td scope="col" style="width:70%;">02/01/2018</td>
                                <td scope="col" style="width:20%; color:green;">+500</td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-warning text-dark  py-0" >
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                                            <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                                            <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                                            <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-danger text-dark  py-0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                            <tr class="nav-link text-black" style="cursor:pointer">
                                <td scope="col" style="width:70%;">03/01/2018</td>
                                <td scope="col" style="width:20%; color:red;">-100</td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-warning text-dark py-0" >
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pen menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg" >
                                            <path fill-rule="evenodd" d="M5.707 13.707a1 1 0 0 1-.39.242l-3 1a1 1 0 0 1-1.266-1.265l1-3a1 1 0 0 1 .242-.391L10.086 2.5a2 2 0 0 1 2.828 0l.586.586a2 2 0 0 1 0 2.828l-7.793 7.793zM3 11l7.793-7.793a1 1 0 0 1 1.414 0l.586.586a1 1 0 0 1 0 1.414L5 13l-3 1 1-3z"/>
                                            <path fill-rule="evenodd" d="M9.854 2.56a.5.5 0 0 0-.708 0L5.854 5.855a.5.5 0 0 1-.708-.708L8.44 1.854a1.5 1.5 0 0 1 2.122 0l.293.292a.5.5 0 0 1-.707.708l-.293-.293z"/>
                                            <path d="M13.293 1.207a1 1 0 0 1 1.414 0l.03.03a1 1 0 0 1 .03 1.383L13.5 4 12 2.5l1.293-1.293z"/>
                                        </svg>
                                    </button>
                                </td>
                                <td scope="col" style="width:5%;">
                                    <button type="button" class="btn btn-danger text-dark  py-0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash menu-icon " fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                            <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                        </svg>
                                    </button>
                                </td>
                            </tr>
                        </table>
                    </div><br>
                    <div  class="dropbtn bg-dark text-year" style="border-radius: 5px;">
                        February
                    </div><br>
                    <div  class="dropbtn bg-dark text-year" style="border-radius: 5px;">
                        March
                    </div>
                </div>
            </div>    
        </div>
        <br><br>
        <div class="dropdown-year_">
            <div  class="dropbtn-year bg-dark text-year" style="border-radius: 5px;">
                2019
            </div>
        </div>
    </div>
</div>



    @section('script')
    <script>
    function myFunction() {
        // document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById("myDropdown-year").classList.toggle("show");
    }

    function myFunction2() {
        document.getElementById("myDropdown").classList.toggle("show");
        // document.getElementById("myDropdown-year").classList.toggle("show");
    }

    jQuery(document).ready(function($) {
            $(".clickable-row").click(function() {
                window.location.href  = $(this).data("href");
            });
        });

    // window.onclick = function(event) {
    //     if (!event.target.matches('.dropbtn')) {
    //         var dropdowns = document.getElementsByClassName("dropdown-content");
    //         var i;
    //         for (i = 0; i < dropdowns.length; i++) {
    //             var openDropdown = dropdowns[i];
    //             if (openDropdown.classList.contains('show')) {
    //                 openDropdown.classList.remove('show');
    //             }
    //         }
    //     }
        
    // }

    
    </script>
    @stop
@stop