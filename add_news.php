<?php
	require('db.php');
	    if (isset($_POST['submit'])){
		//image upload
		$type = stripslashes($_POST['type']);
		$type = mysqli_real_escape_string($con,$type);
		$date = stripslashes($_POST['date']);
		$date = mysqli_real_escape_string($con,$date);
		//
		$content = stripslashes($_POST['content']);
		$content = mysqli_real_escape_string($con,$content);
        $query = "INSERT into `news` (type, date,content) VALUES ('$type','$date','$content')";
        $result = mysqli_query($con,$query);
		        if($result){
					echo "<script>
					alert(\"Successful Submission\");
					window.location = 'newnews.php';
					</script>";
		}else{
					echo "<script>
					alert(\"Submisssion failed. Data already exist\");
					window.location = 'newnews.php';
					</script>";
		}
	}
?>