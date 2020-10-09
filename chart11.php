


<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<script>
window.onload = function () {

var chart = new CanvasJS.Chart("chartContainer", {
	animationEnabled: true,
	exportEnabled: true,
	title:{
		text: "مخطط الانتاج  الاسبوعى"
	},
	data: [{
		type: "pyramid",
		indexLabelFontSize: 18,
		valueRepresents: "area",
		showInLegend: true,
		legendText: "{indexLabel}",
		toolTipContent: "<b>{indexLabel}:</b> {y}%",
		dataPoints: [
			
			{ y:86 , indexLabel: "  اصلاح الدبابات "},
			{ y: 22, indexLabel: "  المحرك" },
			{ y: 19, indexLabel: "  نقل الحركة" },
			{ y: 30, indexLabel: " الاسطوانات" },
			{ y: 18, indexLabel: " التغذية" },
            { y: 77, indexLabel: " الكهرباء" },
             { y: 21, indexLabel: " الجنازير" },
             { y: 65, indexLabel: " التسليح" },
             { y: 0, indexLabel: " الصناعات" },
              { y: 0, indexLabel: " الالات" },
              { y: 0, indexLabel: "  اصلاح الجسم" }
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
</body>
</html>