<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" href="css/style.css" />
<style>
body{
	background-color: #1f82c5;		 
    background-image:url('image/eksa_plan.jpg');
    background-repeat:no-repeat;
    background-size:auto;
	background-attachment: fixed;
    background-position: center; 
}

input[type=text], select {
	width: 300px;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

input[type=password], select {
	width: 300px;
	padding: 12px 20px;
	margin: 8px 0;
	display: inline-block;
	border: 1px solid #ccc;
	border-radius: 4px;
	box-sizing: border-box;
}

.form{
	width: auto;
			margin: 0;
			font-family: "Segoe UI",Optima,Helvetica,Arial,sans-serif;
			line-height: 25px;
			position:fixed;
			top:50%;
			transform: translate(-0%, -50%);
			padding-left: 45%;
		
}
.button {
  display: inline-block;
  border-radius: 4px;
  background-color: #1f82c5;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 28px;
  padding: 5px;
  width: 120px;
  transition: all 0.5s;
  cursor: pointer;
}

.button span {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button span:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button:hover span {
  padding-right: 25px;
}

.button:hover span:after {
  opacity: 1;
  right: 0;
}				 
</style>
</head>
<body background="image/ppp.jpg">
<?php
	require('conn.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($conn,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($conn,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
		$result = mysqli_query($conn,$query) or die(mysqli_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
			header("Location: laman_utama.php"); // Redirect user to index.php
            }else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<div class="form">
<form autocomplete="off" action="" method="post" name="login">
<h2>Incoming and Outgoing Mail System</h2>
<label><b>Username.:</b></label></br>
<input type="text" name="username" placeholder="Username" autocomplete="false" /></br>
</br><label><b>Password.:</b></label></br>
<input type="password" name="password" placeholder="Password" autocomplete="false" /></br>
</br><button class="button" name="submit" type="submit" value="Login" style="vertical-align:middle"><span>Log in </span></button>
</form>
<br /><br />
</div>
<?php } ?>
</body>
</html>
