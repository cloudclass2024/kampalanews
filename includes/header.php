<!DOCTYPE html>
<html>
<head>
<title>Uganda News Center</title>
<link rel="icon" href="img/flag.jfif" type="image/x-icon" />
<link rel="stylesheet" type="text/css" href="css/design.css">
<script>
window.onload = function () {
 
var chart = new CanvasJS.Chart("chartContainer", {
	title: {
		text: "Push-ups Over a Week"
	},
	axisY: {
		title: "Number of Push-ups"
	},
	data: [{
		type: "line",
		dataPoints: <?php echo json_encode($dataPoints, JSON_NUMERIC_CHECK); ?>
	}]
});
chart.render();
 
}
</script>

</head>
<body>
<div class="header">
<div class ="logo" size="20%">
</div>
  <h1>UGANDA NEWS CENTRE</h1>
   <h2><marquee height="100"direction="right">Accurate, Timely & Informative</marquee></h2>
  
</div>
<br>
  
<div class="topnav">
  <div id="navbar">
  <a href="index">Home</a>
  <a href="education">Education</a>
  <a href="politics">Politics</a>
  <a href="entertainment">Entertainment</a>
  <a href="nature">Nature</a>
   <a href="sports">Sports</a>
     <a href="contact">Contact</a>
<a href="#">About Us</a>


  </div>

</div>
