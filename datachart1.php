<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	title:{
		text: "خطة الانتاج الاسبوعى  "  
	},
	axisY: {
		title: "اجمالى الساعات",
		lineColor: "#4F81BC",
		tickColor: "#4F81BC",
		labelFontColor: "#4F81BC"
	},
	axisY2: {
		title: "النسبة المئوية",
		suffix: "%",
		lineColor: "#C0504E",
		tickColor: "#C0504E",
		labelFontColor: "#C0504E"
	},
	data: [{
		type: "column",
		dataPoints: [
			{ label: "   قطاع المحرك", y: 1800 },
			{ label: "اصلاح الدبابات", y: 1438 },
			{ label: " نقل الحركة    ", y: 264.5 },
			{ label: "   الاسطونات ", y: 648},
			{ label: "   التغذية ", y: 84.7},
			{ label: "   الكهرباء", y: 760 },
			{ label: "   الجنازير", y: 1254 },
			{ label: "   التسليح", y: 31 },
			{ label: "   الصناعات ", y: 0 },
			{ label: "   الالات ", y: 0 },
			{ label: "   اصلاح الجسم ", y: 0 }
		]
	}]
});
chart.render();
createPareto();	

function createPareto(){
	var dps = [];
	var yValue, yTotal = 0, yPercent = 0;

	for(var i = 0; i < chart.data[0].dataPoints.length; i++)
		yTotal += chart.data[0].dataPoints[i].y;

	for(var i = 0; i < chart.data[0].dataPoints.length; i++){
		yValue = chart.data[0].dataPoints[i].y;
		yPercent += (yValue / yTotal * 100);
		dps.push({label: chart.data[0].dataPoints[i].label, y: yPercent});
	}
	
	chart.addTo("data",{type:"line", yValueFormatString: "0.##'%'", dataPoints: dps});
	chart.data[1].set("axisYType", "secondary", false);
	chart.axisY[0].set("maximum", yTotal);
	chart.axisY2[0].set("maximum", 100);
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="libs/canvasjs.min.js"></script>
</body>
</html>