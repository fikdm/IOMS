<html>
<head>

<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Pengisian Log</title>
<?php
require('conn.php');
					include("auth.php");
					$id=$_REQUEST['id'];
					if($_SESSION['username'] == 'pkg_admin'){
function valid($id, $norujukan, $tterima, $tsurat, $jenis , $perkara, $tindakan, $location)
{
?>
<title>Log Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" type="text/css" href="css/table.css"/>

<?php

if (isset($error))
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
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
			<h2 style="font-family:helvetica;">Sila Edit Maklumat Berkenaan</h2>
		<hr>
		</br>
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<label class="form-label">No. Rujukan</label>
				<input type="text" name="norujukan" style="width: 330px;" id="norujukan" required="required" autocomplete="off" value="<?php echo $norujukan; ?>" /><br /><br />
				<label class="form-label">Tarikh masuk</label>
				<input type="date" name="tterima" id="tarikhmasuk" required="required" value="<?php echo $tterima; ?>"/><br /><br />
				<label class="form-label">Tarikh surat</label>
				<input type="date" name="tsurat" id="tarikhsurat" required="required" value="<?php echo $tsurat; ?>"/><br /><br />
				<input type="radio" name="jenis" id="masuk" value="masuk"  <?php echo ($jenis=='masuk')?'checked':'' ?> />Masuk
				<input type="radio" name="jenis" id="keluar" value="keluar" <?php echo ($jenis=='keluar')?'checked':'' ?>/>Keluar
				<input type="radio" name="jenis" id="lain" value="lain" <?php echo ($jenis=='lain')?'checked':'' ?>/>Lain-lain</br><br>
				<label class="form-label">Kepada</label>
				<input type="text" style="width: 360px;" name="location" id="location" required="required" autocomplete="off" value="<?php echo $location;?>" /><br />
				<label class="form-label">Perkara :</label><br><br>
				<textarea name="perkara" rows="4" cols="50"/><?php echo $perkara;?></textarea>
				</br>
				<label class="form-label">Tindakan :</label><br>
				<textarea name="tindakan" rows="4" cols="50"/><?php echo $tindakan;?></textarea>
				</br>
				</br>
				<input type="submit" value=" Submit " class="formsub" name="submit"/><br />
			</div>
			
			</form>
<?php
}
require('conn.php');

if (isset($_POST['submit']))
{

if (is_string($_POST['id']))
{

$id = $_POST['id'];
$norujukan = mysqli_real_escape_string($conn, $_POST['norujukan']);
$tterima = mysqli_real_escape_string($conn, $_POST['tterima']);
$tsurat = mysqli_real_escape_string($conn, $_POST['tsurat']);
$jenis = mysqli_real_escape_string($conn, $_POST['jenis']);
$perkara = mysqli_real_escape_string($conn, $_POST['perkara']);
$tindakan = mysqli_real_escape_string($conn, $_POST['tindakan']);
$location = mysqli_real_escape_string($conn, $_POST['location']);



if ($norujukan == '' ||$tterima == '' || $tsurat == '' || $location == '' || $jenis == '' || $perkara == '' || $tindakan == '')
{

$error = 'ERROR: Please fill in all required fields!';


valid($id,$norujukan,$tterima,$tsurat,$location, $jenis, $perkara, $tindakan,$error);
}
else
{

mysqli_query($conn, "UPDATE office SET norujukan='$norujukan',tterima='$tterima',tsurat='$tsurat',location='$location',jenis='$jenis', perkara='$perkara', tindakan='$tindakan' WHERE id='$id'")
or die(mysqli_error($conn));



$conn->close();

echo "<script>
             alert('Document successfully edited'); 
             window.history.go(-2);
     </script>";

}
}
else
{

echo 'Error!';
}
}
else

{

if (isset($_GET['id']) && is_string($_GET['id']))
{

$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM office WHERE id=$id")
or die(mysqli_error($conn));
$row = mysqli_fetch_array($result);

if($row)
{
$norujukan = $row['norujukan'];
$tterima= $row['tterima'];
$tsurat= $row['tsurat'];
$jenis= $row['jenis'];
$perkara = $row['perkara'];
$tindakan = $row['tindakan'];
$location = $row['location'];


valid($id, $norujukan, $tterima, $tsurat, $jenis , $perkara, $tindakan,$location ,'');
}
else
{
echo "No results!";
}
}
else

{
echo 'Error!';
}
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
<?php
					}
					else{
					?>
						<script>
						alert('Please contact to administartion for further verification!!!');
						window.location.href = document.referrer;
						</script>
						<?php
					}
					
					?>
					
</body>
</html>