<!DOCTYPE HTML>
<html>
<head>  
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	title:{
		text: "   نقل الحركة "
	},	
	axisY: {
		title: "المخطط",
		titleFontColor: "#4F81BC",
		lineColor: "#4F81BC",
		labelFontColor: "#4F81BC",
		tickColor: "#4F81BC"
	},
	axisY2: {
		title: "الانتاج الفعلى",
		titleFontColor: "#C0504E",
		lineColor: "#C0504E",
		labelFontColor: "#C0504E",
		tickColor: "#C0504E"
	},	
	toolTip: {
		shared: true
	},
	legend: {
		cursor:"pointer",
		itemclick: toggleDataSeries
	},
	data: [{
		// planned
		type: "column",
		name: "العدد المخطط اصلاحه",
		legendText: "عدد المخطط اصلاحه",
		showInLegend: true, 
		dataPoints:[
			{ label: "      ترانسميشن إم60    ", y:  6},
			{ label: "     ترانسميشن إم88        ", y:4 },
			{ label: "     ترانسميشن إم113        ", y: 4 },
			{ label: "     ترانسميشن شابرال       ", y: 1 },
			{ label: "       جيتار إم113    ", y: 8 },
			{ label: "             دفرنشال إم113  ", y: 4 },
			{ label: "      تخفيض إم 88          ", y: 10 }
			
		]
	},
	{
		//production
		type: "column",	
		name: "اجمالى الانتاج الفعلى",
		legendText: "اجمالى الانتاج الفعلى",
		axisYType: "secondary",
		showInLegend: true,
		dataPoints:[
			{ label: "        ترانسميشن إم60    ", y:  1},
			{ label: "      ترانسميشن إم88      ", y: 0},
			{ label: "     ترانسميشن إم113       ", y: 1 },
			{ label: "    ترانسميشن شابرال        ", y: 1 },
			{ label: "           جيتار إم113    ", y: 1},
			{ label: "           دفرنشال إم113    ", y:1 },
			{ label: "          تخفيض إم 88      ", y:  3}
			
		]
	}]
});
chart.render();

function toggleDataSeries(e) {
	if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
		e.dataSeries.visible = false;
	}
	else {
		e.dataSeries.visible = true;
	}
	chart.render();
}

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="libs/canvasjs.min.js"></script>
</body>
</html>