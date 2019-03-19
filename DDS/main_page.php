<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>FDM SYSTEM</title>
<?php
require('conn.php');
include("auth.php");
?>
</head>
<body>

<style>
		body{
			width: auto;
			margin: 0;
			font-family: "Segoe UI",Optima,Helvetica,Arial,sans-serif;
			background-image: linear-gradient(#e6e6ff, #ffffff);
			line-height: 25px;
			padding: 0;
		}
		
		/* duh */
		 /* Fixed sidenav, full height */
		 
		 
		 
.sidenav {
  height: 100%;
  width: 200px;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #ff661a;
  overflow-x: hidden;
  padding-top: 20px;
}

/* Style the sidenav links and the dropdown button */
.sidenav a, .dropdown-btn {
  padding: 6px 8px 6px 16px;
  text-decoration: none;
  font-size: 20px;
  color: #ffffff;
  display: block;
  border: none;
  background: none;
  width:100%;
  text-align: left;
  cursor: pointer;
  outline: none;
}

/* On mouse-over */
.sidenav a:hover, .dropdown-btn:hover {
  color: #f1f1f1;
}

/* Main content */
.main {
  margin-left: 200px; /* Same as the width of the sidenav */
  font-size: 20px; /* Increased text to enable scrolling */
  padding: 0px 10px;
}

/* Add an active class to the active dropdown button */
.active {
  background-color: #ff0000;
  color: white;
}

/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
.dropdown-container {
  display: none;
  background-color: #262626;
  padding-left: 8px;
}

/* Optional: Style the caret down icon */
.fa-caret-down {
  float: right;
  padding-right: 8px;
} 
		
		
		.form-box {
			padding: 30px;
			margin-left: 15%;
			height: 600px;
		}
		.form-label{
			margin:2px;
		}
		.formsub{    
			padding: 10px;
			background: #84D2A7;
			border: 0;
			border-radius: 4px;
			margin: 0px 5px;
			color: #FFF;
			width: 150px;
		}
		
	</style>
<div class="sidenav">
		<a href="main_page.php"><img border="0" align="top" src="../image/homee.png?macarena" width="20" height="20" style="padding:4px;"> Home Page</a>
		<a href="in.php"><img border="0" align="top" src="../image/downn.png" width="20" height="20" style="padding:4px;"> Files Log (IN)</a>
		<a href="out.php"><img border="0" align="top" src="../image/upp.png" width="20" height="20" style="padding:4px;"> Files Log (OUT)</a>
		<a href="dir.php"><img border="0" align="top" src="../image/file.png" width="20" height="20" style="padding:4px;"> Directory</a>
		</br></br></br></br></br></br></br></br>
		<a href="../laman_utama.php" style="background-color: 111" ><img border="0" align="top" src="../image/left.png" width="20" height="20" style="padding:4px;"> MAIN SYSTEM</a>
		</div>
</div> 

<div class="form-box">
<a href="logout.php" style="
	float: right;
	border-radius: 4px;
	background-color: #1f82c5;
	border: none;
	color: #FFFFFF;
	text-align: center;
	font-size: 20px;
	padding: 5px;
	width: 120px;
	display: inline-block;
	text-decoration: none;">Log Out<img border="0" align="top" src="../image/logout.png" width="20" height="20" style="padding:4px;"></a>
	<h1 style="font-family:helvetica;">File Directory Management</h1>
	<hr>
		</br>
	<img border="0" align="top" src="../image/eksa_plan.jpg" width="1000" height="500">

	
	</div>
	
	
	
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
} 
</script>


<div>

<form action="logout.php">
    <input type="submit" value="Log Out" style="float: right;/>
</form>
</div>
</div>
</body>
</html>