
<?php include"includes/header.php"; ?>
<head>
<style>
img {
  max-width: 100%;
  height: auto%;
}
</style>
</head>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">

	  <p>
<img src="img/1.jfif" alt="Cinque Terre" width="1500" height="600">
	<h3>
	Uganda National Examinations Board (@UNEB_UG) Releases 2024 Exam Timetable
	</h3>
	   </p>
<img src="img/2.jpg" alt="Cinque Terre" width="1500" height="600">
<?php include"education_news.php"; ?>
      <div class="fakeimg" style="height:auto;">
	  
	  </div>
    </div>
  </div>
<?php include"includes/facebook.php"; ?>
</div>
</div>
<?php include"includes/footer.php"; ?>
<script>
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("navbar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}
</script>
</body>
</html>
