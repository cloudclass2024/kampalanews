<?php

	require('db.php');
	//session_start();
    // If form submitted, insert values into the database.
    //if (isset($_POST['username'])){
		
		//$username = stripslashes($_REQUEST['username']); // removes backslashes
		//$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		//$password = stripslashes($_REQUEST['password']);
		//$password = mysqli_real_escape_string($con,$password);
		
	//Checking is user existing in the database or not
       // $query = "SELECT * FROM `users` WHERE username='$username' ";
		//$result = mysqli_query($con,$query) or die(mysql_error());
		//$rows = mysqli_num_rows($result);
       // if($rows==1){
		//	$_SESSION['username'] = $username;
		//	header("Location: home.php"); // Redirect user to index.php
         //   }else{
		//		header("Location: index.php"); // Redirect user to index.php
	//			}
   // }else{
//?>
<!DOCTYPE html>
<html>
<head>
    <title>LifeLink Hospital</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:700,600' rel='stylesheet' type='text/css'>
	<link href='css/login.css' rel='stylesheet' type='text/css'>
    <style>
    </style>
</head>
<body>
<div class="content">
    <div id="absoluteCenteredDiv">
        <form action="" method="post" name="login">
            <div class="box">
                <h1>Enter Login Credentials</h1>
                <input class="username" name="username" type="text" placeholder="User Name" maxlength="10">
                <input class="username" name="password" type="password" placeholder="Password" maxlength="10"><br>
                <input class="action" name="login" type="submit" value="Login">
				<input class="action" name="username" type="reset" value="Cancel">
            </div>
        </form>
        <p>Forgot your password? <a class="fpwd" href="#">Click Here!</a></p>
    </div> 
</div>	
</body>
</html>
<?php } ?>