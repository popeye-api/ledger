@extends('menu')
@section('title','dashboard')

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
  display: inline-block;
}

.dropdown-content {
  display: none;
  position: static;
  background-color: #f1f1f1;
  min-width: 160px;
  z-index: 1;
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

</style>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item" aria-current="page"><a href="{{ url('v_dashboard') }}">Dashbaord</a></li>
        <li class="breadcrumb-item active" aria-current="page">2018</li>
    </ol>
</nav>
<div class="container-fluid">
    <h3>2018</h3><hr>
    <div class="dropdown">
        <div onclick="myFunction()" class="dropbtn bg-dark text-white" >
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-right-fill" viewBox="0 0 16 16">
                <path d="M12.14 8.753l-5.482 4.796c-.646.566-1.658.106-1.658-.753V3.204a1 1 0 0 1 1.659-.753l5.48 4.796a1 1 0 0 1 0 1.506z"/>
            </svg>
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-caret-down-fill" viewBox="0 0 16 16">
                <path d="M7.247 11.14L2.451 5.658C1.885 5.013 2.345 4 3.204 4h9.592a1 1 0 0 1 .753 1.659l-4.796 5.48a1 1 0 0 1-1.506 0z"/>
            </svg>
            January
        </div>
        <div id="myDropdown" class="dropdown-content">
            <a href="#" class="nav-link text-black" style="list-style-type: disc;">01/01/2018<label style="color:green; float:right;">+100</label></a>
            <a href="#" class="nav-link text-black" style="list-style-type: disc;">02/01/2018<label style="color:red; float:right;">-100</label></a>
            <a href="#" class="nav-link text-black" style="list-style-type: disc;">03/01/2018<label style="color:green; float:right;">+500</label></a>
        </div><br>
    </div>
</div>
    @section('script')

    <script>
    // $(document).ready(function(){
    //     $(".dropbtn").on('click',function(e){
    //         if($(".dropdown-content").css("display", "none")){
    //             $(".bi-caret-right-fill").css("display", "none");
    //             $(".bi-caret-down-fill").css("display", "block");
    //         }else{
    //             $(".bi-caret-right-fill").css("display", "block");
    //             $(".bi-caret-down-fill").css("display", "none");
    //         }
    //     });
    // });
    function myFunction() {
        document.getElementById("myDropdown").classList.toggle("show");
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
