<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
  animationEnabled: true,
  theme: "light2",
  title: {
    text: "Monthly Production Data"
  },
  axisX: {
    valueFormatString: "MMM"
  },
  axisY: {
    prefix: "$",
    labelFormatter: addSymbols
  },
  toolTip: {
    shared: true
  },
  legend: {
    cursor: "pointer",
    itemclick: toggleDataSeries
  },
  data: [
  {
    type: "column",
    name: "Actual production",
    showInLegend: true,
    xValueFormatString: "MMMM YYYY",
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2019, 0), y:  10},
      { x: new Date(2019, 1), y:  20},
      { x: new Date(2019, 2), y: 30 },
      { x: new Date(2019, 3), y: 100, indexLabel: "High Renewals" },
      { x: new Date(2019, 4), y: 20 },
      { x: new Date(2019, 5), y:  4},
      { x: new Date(2019, 6), y:  5},
      { x: new Date(2019, 7), y:  6},
      { x: new Date(2019, 8), y: 3},
      { x: new Date(2019, 9), y: 6 },
      { x: new Date(2019, 10), y: 3 },
      { x: new Date(2019, 11), y:  30}
    ]
  }, 
  {
    type: "line",
    name: "Expected production",
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2019, 0), y: 10 },
      { x: new Date(2019, 1), y: 20 },
      { x: new Date(2019, 2), y: 30 },
      { x: new Date(2019, 3), y: 40 },
      { x: new Date(2019, 4), y:  50},
      { x: new Date(2019, 5), y: 60},
      { x: new Date(2019, 6), y: 70 },
      { x: new Date(2019, 7), y:  80},
      { x: new Date(2019, 8), y: 90},
      { x: new Date(2019, 9), y:  100},
      { x: new Date(2019, 10), y: 200 },
      { x: new Date(2019, 11), y: 101 }
    ]
  },
  {
    type: "area",
    name: "Profit",
    markerBorderColor: "white",
    markerBorderThickness: 2,
    showInLegend: true,
    yValueFormatString: "$#,##0",
    dataPoints: [
      { x: new Date(2019, 0), y:  550},
      { x: new Date(2019, 1), y: 555 },
      { x: new Date(2019, 2), y: 55},
      { x: new Date(2019, 3), y: 44},
      { x: new Date(2019, 4), y: 55 },
      { x: new Date(2019, 5), y: 23 },
      { x: new Date(2019, 6), y: 20 },
      { x: new Date(2019, 7), y:  50},
      { x: new Date(2019, 8), y: 40 },
      { x: new Date(2019, 9), y: 30 },
      { x: new Date(2019, 10), y:  20},
      { x: new Date(2019, 11), y:  10}
    ]
  }]
});
chart.render();

function addSymbols(e) {
  var suffixes = ["", "K", "M", "B"];
  var order = Math.max(Math.floor(Math.log(e.value) / Math.log(1000)), 0);

  if(order > suffixes.length - 1)                 
    order = suffixes.length - 1;

  var suffix = suffixes[order];      
  return CanvasJS.formatNumber(e.value / Math.pow(1000, order)) + suffix;
}

function toggleDataSeries(e) {
  if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
    e.dataSeries.visible = false;
  } else {
    e.dataSeries.visible = true;
  }
  e.chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<br>
<a href="datachart1.php"> check all department</a>
<script src="libs/canvasjs.min.js"></script>
</body>
</html>