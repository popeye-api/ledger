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
        <table class="table table-bordered">
            <colgroup>
                <col width="120">
                <col width="200">
                <col width="200">
                <col width="100">
            </colgroup>
            <thead class="thead-dark">
                <tr>
                    <th class="text-center">Date</th>
                    <th class="text-center">Balance</th>
                    <th class="text-center">Comulative</th>
                </tr>
            </thead>
            <tbody>
            <?php $sum=0;?>
                @foreach($result as $row)
                <?php                    
                    $day = substr("$row->created_at",0,2);               //เก็บ ปี ที่สิ้นสุด
                    $month = substr("$row->created_at",3,2);              //เก็บ เดือน ที่สิ้นสุด
                    $year = substr("$row->created_at",6,4);                //เก็บ วัน ที่สิ้นสุด 
                    $date_all = $year.'-'.$month.'-'.$day;  //เก็บ ปี-เดือน-วัน ที่สิ้นสุด 
                    $sum += $row->statement_balance;
                ?>
                    <tr style="cursor:pointer">
                        <td class='clickable-row text-center' data-href="{{action('Ledger_controller@show_ledger_detail',$row->statement_id)}}">{{$row->created_at}}</td>
                        <td class='clickable-row text-right' data-href="{{action('Ledger_controller@show_ledger_detail',$row->statement_id)}}">{{$row->statement_balance}}</td>
                        <td class='clickable-row text-right' data-href="{{action('Ledger_controller@show_ledger_detail',$row->statement_id)}}">{{$sum}}</td>
                    </tr>
                @endforeach 
            </tbody>
        </table>
        
   
    
    
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