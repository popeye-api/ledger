@extends('menu')
@section('title','dashboard')

@section('content')
<!-- Page wrapper -->
<!DOCTYPE html>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
        <li class="breadcrumb-item active" aria-current="page">รายงานสรุปเชิงสถิติ</li>
    </ol>
  </nav>

  
  
    <!-- Chart's container -->
    <div id="chart" style="height: 300px;"></div>
    <!-- Charting library -->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <!-- Your application script -->
    
  





    @section('script')

    <script>
      const chart = new Chartisan({
        el: '#chart',
        url: "@chart('sample_chart')",
        hooks: new ChartisanHooks()
          .colors()
          .datasets(['line']),
      });
    </script>

    @stop
@stop

