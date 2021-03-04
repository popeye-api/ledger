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
  width:995px;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
  border: 1px solid silver;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;

  display: block;
  width: 1000px;
}

.dropdown a:hover {
    color: black;
    background-color: #ddd;
    margin: auto;
    width:995px;
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
    <div class="container">
        <div class="dropdown-year">
            <div onclick="myFunction()" class="dropbtn-year bg-dark text-white" style="border-radius: 5px;">
                2020
            </div>
            <div id="myDropdown-year" class="dropdown-content-year drop-list-year">
                <div class="dropdown">
                    <div onclick="myFunction()" class="dropbtn bg-dark text-white" style="border-radius: 5px;">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                            <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                            <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
                        </svg> -->
                        January
                    </div>
                    <div id="myDropdown" class="dropdown-content drop-list">
                        <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">01/01/2018<label style="color:green; float:right;">+100</label></a>
                        <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">02/01/2018<label style="color:red; float:right;">-100</label></a>
                        <a href="{{ url('v_ledger_detail') }}" class="nav-link text-black" style="list-style-type: disc;">03/01/2018<label style="color:green; float:right;">+500</label></a>
                    </div><br>
                </div>
            </div>    
        </div>
    </div>
</div>



    @section('script')
    <script>
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
        document.getElementById("myDropdown-year").classList.toggle("show");
        document.getElementByClass("dropdown").classList.toggle("show");
        
    }

    window.onclick = function(event) {
        if (!event.target.matches('.dropbtn')) {
            var dropdowns = document.getElementsByClassName("dropdown-content");
            var i;
            for (i = 0; i < dropdowns.length; i++) {
                var openDropdown = dropdowns[i];
                if (openDropdown.classList.contains('show')) {
                    openDropdown.classList.remove('show');
                }
            }
        }
        
    }

    
    </script>
    @stop
@stop