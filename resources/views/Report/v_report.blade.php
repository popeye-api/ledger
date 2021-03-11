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
        <h3>The table shows the total savings for each month.</h3>
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

        <!-- start input datetime -->
        <!-- <div class="col-md-4" style="float:left;">
        <select class="form-select" aria-label="Default select example">
        <option selected>Year</option>
        <option value="1">One</option>
        <option value="2">Two</option>
        <option value="3">Three</option>
        </select>
        </div> -->
        <!-- end input datetime -->

        <!-- <div class="col-md-4" style="float:center;"> -->
        <table id="myTable" class="table" style="width:100%">
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
              foreach($result as $row){
                if(date('m',strtotime($row->created_at)) == '01'){
                  if($row->log_type_id == 1){
                    $balance += $row->balance;
                  }
                  if($row->log_type_id == 2){
                    $balance -= $row->balance;
                  }
                }
              }
            ?>
            <td><?php echo $balance ?></td>
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
            ?>
            <td><?php echo $balance_feb ?></td>
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
            ?>
            <td><?php echo $balance_mar ?></td>
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
            ?>
            <td><?php echo $balance_april ?></td>
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
            ?>
            <td><?php echo $balance_may ?></td>
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
            ?>
            <td><?php echo $balance_june ?></td>
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
            ?>
            <td><?php echo $balance_july ?></td>
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
            ?>
            <td><?php echo $balance_aug ?></td>
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
            ?>
            <td><?php echo $balance_sep ?></td>
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
            ?>
            <td><?php echo $balance_oct ?></td>
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
            ?>
            <td><?php echo $balance_nov ?></td>
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
            ?>
            <td><?php echo $balance_dec ?></td>
            </tr>
            <tr>
            <td colspan="2" style="text-align: center;">Total </td>
            </tr>
        </tbody>
        </table>
          

</div>




@stop


@section('script')
@stop

@section('footer')


@stop