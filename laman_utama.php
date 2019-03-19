<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<link rel="stylesheet" type="text/css" href="css/table.css"/>
<link rel="stylesheet" type="text/css" href="css/test.css?wat"/>
<script type="text/javascript" language="javascript" src="js/test.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Laman Utama</title>
<?php
require('conn.php');
include("auth.php");
?>

</head>
<body>
<div class="sidenav">
		<a href="laman_utama.php"><img border="0" align="top" src="image/homee.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> Laman Utama</a>
		<button class="dropdown-btn"><img border="0" align="top" src="image/docc.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> Pengisian Log
			<i class="fa fa-caret-down"></i>
		</button>
			<div class="dropdown-container">
				<a href="daftar_masuk.php">Surat Masuk</a>
				<a href="daftar_keluar.php">Surat Keluar</a>
		</div>
		<a href="masuk.php"><img border="0" align="top" src="image/downn.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> Surat Masuk</a>
		<a href="keluar.php"><img border="0" align="top" src="image/upp.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> Surat Keluar</a>
		<button class="dropdown-btn"><img border="0" align="top" src="image/searchh.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> Carian
			<i class="fa fa-caret-down"></i>
		</button>
			<div class="dropdown-container">
				<a href="tarikh.php">Tarikh</a>
				<a href="carian.php">Kata Kunci</a>
		</div>
		<a href="about.php"><img border="0" align="top" src="image/qqq.png" width="20" height="20" style="padding:4px; margin-bottom:5px;"> About</a>
		</br></br></br></br></br></br></br></br>
		<a href="DDS/main_page.php" style="background-color: FFA500" ><img border="0" align="top" src="image/file.png" width="20" height="20" style="padding:4px;"> FDM SYSTEM</a>
		
		
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
	text-decoration: none;">Log Out<img border="0" align="top" src="image/logout.png" width="20" height="20" style="padding:4px;"></a>
	<h1 style="font-family:helvetica;">Laman Utama</h1>
	<hr>
		</br>
	<!--<img border="0" align="top" src="image/ppp.jpg" width="600" height="300">-->
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
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
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