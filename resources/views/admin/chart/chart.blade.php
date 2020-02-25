@extends('layouts.admin')
@section('content')
<div class="row">
   <div class="col-md-10 col-md-offset-1">
	   <div class="panel panel-default">
		   <div class="panel-heading"><b>Charts</b></div>
		   <div class="panel-body">
			   <canvas id="canvas" height="280" width="600"></canvas>
		   </div>
	   </div>
   </div>
 </div>
@endsection

@section('scripts')
@parent
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.js" charset="utf-8"></script>
<script>
var cData =  JSON.parse(`<?php echo $chart_data; ?>`);
$(document).ready(function(){
	var ctx = $("#canvas");
	var data = {
		labels: cData.label,
		datasets: [
		{
			label: "Users Count",
			data: cData.data,
			backgroundColor: [
			  "#DEB887",
			  "#A9A9A9",
			  "#DC143C",
			  "#F4A460",
			  "#2E8B57",
			  "#1D7A46",
			  "#CDA776",
			],
			borderColor: [
			  "#CDA776",
			  "#989898",
			  "#CB252B",
			  "#E39371",
			  "#1D7A46",
			  "#F4A460",
			  "#CDA776",
			],
			borderWidth: [1, 1, 1, 1, 1,1,1]
		}
		]
	};
	
	//options
      var options = {
        responsive: true,
        title: {
          display: true,
          position: "top",
          text: "Last Week Registered Users -  Day Wise Count",
          fontSize: 18,
          fontColor: "#111"
        },
        legend: {
          display: true,
          position: "bottom",
          labels: {
            fontColor: "#333",
            fontSize: 16
          }
        }
      };
	  //create Pie Chart class object
      var chart1 = new Chart(ctx, {
		type: "pie",
		data: data,
		options: options
	  });
});
</script>
@endsection