<style>
img {
  max-width: 100%;
  height: auto%;
}
</style>

<?php include"includes/header.php"; ?>
<div class="content">
<div class="row">
  <div class="leftcolumn">
    <div class="card">
 	<img src="img/nature.jpg" alt="Cinque Terre" width="1500" height="600">
<?php include"nature_news.php"; ?>
	   
 
 
	   </p>
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
