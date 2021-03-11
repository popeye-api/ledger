@extends('menu')
@section('title','report')

@section('content')

<nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('report') }}" style="color:black;">Report</a></li>
  </ol>
</nav>
<!-- <div class="container"> -->
<div class="container-fluid">
        <h3>The table shows sum the amount of income and expenditure each year <?php echo date('Y') ?>.</h3>
        <hr>
        <!-- start div รูปไฟล์ excel -->
        <div style="float:right;">
        <form action='exportledger'>
            <button class="btn" style="color:green">
            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" fill="currentColor" class="bi bi-file-earmark-excel-fill" viewBox="0 0 16 16" style="font-size:40px;">
                <path d="M9.293 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V4.707A1 1 0 0 0 13.707 4L10 .293A1 1 0 0 0 9.293 0zM9.5 3.5v-2l3 3h-2a1 1 0 0 1-1-1zM5.884 6.68L8 9.219l2.116-2.54a.5.5 0 1 1 .768.641L8.651 10l2.233 2.68a.5.5 0 0 1-.768.64L8 10.781l-2.116 2.54a.5.5 0 0 1-.768-.641L7.349 10 5.116 7.32a.5.5 0 1 1 .768-.64z" />
            </svg>
            </button>
        </form>
        </div>
        <!-- end div รูปไฟล์ excel -->
        <table id="myTable" class="table table-bordered" style="width:100%">
        <thead class="thead-dark ">
            <tr>
            <th scope="col" style="text-align:center;">Month</th>
            <th scope="col" style="text-align:center;">Balance</th>
            <th scope="col" style="text-align:center;">Cumulative balance</th>
            </tr>
        </thead>
        <tbody id="data">
            <tr>
            <td>January</td>
            <?php 
              $balance = 0;
              $balance_jan = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '01'){
                  if($row->log_type_id == 1){
                    $balance_jan += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_jan -= $row->balance;
                  }
                }
              }

            if( $balance_jan  <  0){
              echo '<td style="text-align:right; color:red">'.$balance_jan.'</td>';
            } else {
              echo '<td style="text-align:right; color:green">'.$balance_jan.'</td>';
            }
            $balance += $balance_jan;
            if( $balance < 0 ){
              echo '<td style="text-align:right; color:red">'.$balance.'</td>';
            } else {
              echo '<td style="text-align:right; color:green">'.$balance.'</td>';
            }
            ?>
            </tr>
            <tr>
            <td>February</td>
            <?php 
              $balance_feb = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '02'){
                  if($row->log_type_id == 1){
                    $balance_feb += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_feb -= $row->balance;
                  }
                }
              }

              if( $balance_feb  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_feb.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_feb.'</td>';
              }
              $balance += $balance_feb;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>March</td>
            <?php 
              $balance_mar = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '03'){
                  if($row->log_type_id == 1){
                    $balance_mar += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_mar -= $row->balance;
                  }
                }
              }

              if( $balance_mar  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_mar.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_mar.'</td>';
              }
              $balance += $balance_mar;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>April</td>
            <?php 
              $balance_april = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '04'){
                  if($row->log_type_id == 1){
                    $balance_april += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_april -= $row->balance;
                  }
                }
              }

              if( $balance_april  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_april.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_april.'</td>';
              }
              $balance += $balance_april;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>May</td>
            <?php 
              $balance_may = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '05'){
                  if($row->log_type_id == 1){
                    $balance_may += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_may -= $row->balance;
                  }
                }
              }
   
              if( $balance_may  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_may.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_may.'</td>';
              }
              $balance += $balance_may;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>June</td>
            <?php 
              $balance_june = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '06'){
                  if($row->log_type_id == 1){
                    $balance_june += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_june -= $row->balance;
                  }
                }
              }

              if( $balance_june  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_june.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_june.'</td>';
              }
              $balance += $balance_june;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>July</td>
            <?php 
              $balance_july = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '07'){
                  if($row->log_type_id == 1){
                    $balance_july += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_july -= $row->balance;
                  }
                }
              }
              
              if( $balance_july  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_july.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_july.'</td>';
              }
              $balance += $balance_july;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>August</td>
            <?php 
              $balance_aug = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '08'){
                  if($row->log_type_id == 1){
                    $balance_aug += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_aug -= $row->balance;
                  }
                }
              }
              
              if( $balance_aug  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_aug.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_aug.'</td>';
              }
              $balance += $balance_aug;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>September</td>
            <?php 
              $balance_sep = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '09'){
                  if($row->log_type_id == 1){
                    $balance_sep += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_sep -= $row->balance;
                  }
                }
              }
              
              if( $balance_sep  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_sep.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_sep.'</td>';
              }
              $balance += $balance_sep;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>October </td>
            <?php 
              $balance_oct = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '10'){
                  if($row->log_type_id == 1){
                    $balance_oct += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_oct -= $row->balance;
                  }
                }
              }
              
              if( $balance_oct  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_oct.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_oct.'</td>';
              }
              $balance += $balance_oct;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>November </td>
            <?php 
              $balance_nov = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '11'){
                  if($row->log_type_id == 1){
                    $balance_nov += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_nov -= $row->balance;
                  }
                }
              }
              
              if( $balance_nov  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_nov.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_nov.'</td>';
              }
              $balance += $balance_nov;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td>December </td>
            <?php 
              $balance_dec = 0;
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '12'){
                  if($row->log_type_id == 1){
                    $balance_dec += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance_dec -= $row->balance;
                  }
                }
              }
              
              if( $balance_dec  <  0){
                echo '<td style="text-align:right; color:red">'.$balance_dec.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance_dec.'</td>';
              }
              $balance += $balance_dec;
              if( $balance < 0 ){
                echo '<td style="text-align:right; color:red">'.$balance.'</td>';
              } else {
                echo '<td style="text-align:right; color:green">'.$balance.'</td>';
              }
            ?>
            </tr>
            <tr>
            <td colspan="2" style="text-align: center;">Total </td>
            <?php
            if( $balance < 0 ){
              echo '<td style="text-align:right; color:red">'.$balance.'</td>';
            } else {
              echo '<td style="text-align:right; color:green">'.$balance.'</td>';
            }
            ?>
            </tr>
        </tbody>
        </table>
          

</div>




@stop


@section('script')
@stop

@section('footer')


@stop