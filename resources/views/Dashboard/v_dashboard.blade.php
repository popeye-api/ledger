@extends('menu')
@section('title','dashboard')
@section('content')


<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "ledger";
	$conn = mysqli_connect($servername, $username, $password, $dbname);

  $id_session = Auth::user()->user_id;
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

  $sql = "SELECT * FROM ledger_account
          WHERE ledger_user_id = $id_session";
	$result = mysqli_query($conn, $sql);

	if (mysqli_num_rows($result) > 0) {

		while($row = mysqli_fetch_assoc($result)) {
			
			$labels[] = $row['created_at'];
			
			$data[] = $row['ledger_account_balance'];
		}
	}
	mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<title>ChartJs</title>

  </head>
  	<style>
		  .size{
				height: 1400px;
				width: 1300px;
				margin-left:auto; 
				margin-right:auto;
				margin-left:auto;
		  }

		  .bg{
			  background-color: #DCDCDC;
		  }

	  </style>
  
  <body class="bg">
    
	  

	<canvas id="myChart" class="size item-center "></canvas>
	
	<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.4.0/Chart.js"></script>
	<script>
	var ctx = document.getElementById("myChart");
	var myChart = new Chart(ctx, {
		// type: 'bar',
		type: 'line',
		// type: 'pie',
		data: {
			labels: ['January','February','March','April','May','June','July','August','September','October','November','December'],
			datasets: [{
				label: 'Total Ledger',
				data: <?=json_encode($data, JSON_NUMERIC_CHECK);?>,
				backgroundColor: [
					'rgba(255,208,189, 0.8)',
					'rgba(255,208,189, 0.8)',
					'rgba(255,208,189, 0.8)',
					'rgba(255,208,189, 0.8)',
					'rgba(255,208,189, 0.8)',
					'rgba(255,208,189, 0.8)'
				],
				borderColor: [
					'rgba(235,91,35, 0.8)',
					'rgba(235,91,35, 0.8)',
					'rgba(235,91,35, 0.8)',
					'rgba(235,91,35, 0.8)',
					'rgba(235,91,35, 0.8)',
					'rgba(235,91,35, 0.8)'
				],
				borderWidth: 0
			}]
    },
    
    
		options: {
      
			scales: {
				yAxes: [{
					ticks: {
						beginAtZero:true
					}
				}]
			},
			 responsive: false,
			 title: {
				display: true,
				text: 'Total Ledger Graph (Month)'
			}
    
  }
	});
	</script>
		
  </body>
</html>
@endsection
