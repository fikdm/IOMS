<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Pengisian Log</title>
<?php
require('conn.php');
include("auth.php");
?>
<title>Log Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/table.css"/>



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
			
			<form action="" method="post">
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
			<h2 style="font-family:helvetica;">Sila Isi Maklumat Surat Keluar</h2>
		<hr>
		</br>
				<label class="form-label">No. Rujukan</label>
				<input type="text" name="nr" style="width: 330px;" id="norujukan" required="required" autocomplete="off" placeholder="CTH/123/Pek(4)/00CTH/123/Pek(4)/00"/><br /><br />
				<label class="form-label">Tarikh Keluar</label>
				<input type="date" name="tm" id="tarikhmasuk" required="required" placeholder="Please Enter Name"/><br /><br />
				<label class="form-label">Tarikh Surat</label>
				<input type="date" name="ts" id="tarikhsurat" required="required" placeholder="Please Enter Name"/><br /><br />
				<label class="form-label">Kepada</label>
				<input type="text" style="width: 360px;" name="location" id="location" required="required" autocomplete="off" placeholder="Pejabat Pendidikan Daerah Dalat"/><br />
				<input type="hidden" required="required" name="jenis" id="keluar" value="keluar" checked="checked"/><br>
				<label class="form-label">Perkara :</label><br>
				<textarea name="pkr" rows="4" cols="50" id="perkara" required="required" placeholder="Perkara"/></textarea>
				</br>
				<label class="form-label">Maklumat Tambahan :</label><br>
				<textarea name="tdk" rows="4" cols="50" id="tindakan" required="required" placeholder="Tindakan"/></textarea>
				</br>
				</br>
				<input type="submit" value=" Submit " class="formsub" name="submit"/><br />
			</div>
			
			</form>
<?php
if(isset($_POST["submit"])){
require('conn.php');

$sql = "INSERT INTO office (norujukan, tterima, tsurat, location, jenis, perkara, tindakan)
VALUES ('".$_POST["nr"]."','".$_POST["tm"]."','".$_POST["ts"]."','".$_POST["location"]."','".$_POST["jenis"]."','".$_POST["pkr"]."','".$_POST["tdk"]."')";

if ($conn->query($sql) === TRUE) {
echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
} else {
echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $conn->error."');</script>";
}

$conn->close();
}
?>
<script>

//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
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
</body>
</html>