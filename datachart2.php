<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function() {

var chart = new CanvasJS.Chart("chartContainer", {
	theme: "light2", // "light1", "light2", "dark1", "dark2"
	exportEnabled: true,
	animationEnabled: true,
	title: {
		text: "  تمام النسبة المئوية الاسبوعى للقطاعات "
	},
	data: [{
		type: "pie",
		startAngle: 25,
		toolTipContent: "<b>{label}</b>: {y}%",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label}  {y}%",
		dataPoints: [
			{ y: 86, label: "                       اصلاح الدبابات  " },

			{ y: 22, label: "                     قطاع المحرك   " },
 
			{ y: 19, label: "                      نقل الحركة  " },

			{ y: 30, label: "                   الاسطوانات  " },

			{ y: 18, label: "                   التغذية " },

			{ y: 77, label: "              الكهرباء    " },

			{ y: 21, label: "                 الجنازير  " },
		
			{ y: 65, label: "                التسليح   " },
			{ y: 0, label: "               الصناعات    " },
			{ y: 0, label: "              الالات     " },
			{ y: 0, label: "               اصلاح الجسم    " }
		]	
	}]
});
chart.render();

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 0px auto;"></div>
<script src="libs/canvasjs.min.js"></script>
<a href="chart11.php">  check here</a>
</body>
</html>