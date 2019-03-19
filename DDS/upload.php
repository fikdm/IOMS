<html>
<head>

<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Pengisian Log</title>
<?php
require('conn.php');
					include("auth.php");
					$id=$_REQUEST['id'];
					if($_SESSION['username'] == 'pkg_admin'){
function valid($id, $norujukan, $tterima, $tsurat, $jenis , $perkara, $tindakan)
{
?>
<title>Log Surat</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<?php

if (isset($error))
{
echo '<div style="padding:4px; border:1px solid red; color:red;">'.$error.'</div>';
}
?>

<style>
		body{
			width: auto;
			margin: 0;
			font-family: "Segoe UI",Optima,Helvetica,Arial,sans-serif;
			line-height: 25px;
			 background-image: linear-gradient(#e6e6ff, #ffffff);
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
			 margin: 0 auto;
			border-radius: 4px;
			color: #FFF;
			width: 150px;
		}
		label{
display:inline-block;
width:250px;
margin-right:30px;
text-align:right;
}

input{

}

fieldset{
border:none;
width:600px;
margin:0px left;
}
		
	</style>
<body>
	 <div class="sidenav">
		<a href="main_page.php"><img border="0" align="top" src="../image/homee.png?macarena" width="20" height="20" style="padding:4px;"> Home Page</a>
		<a href="in.php"><img border="0" align="top" src="../image/downn.png" width="20" height="20" style="padding:4px;"> Files Log (IN)</a>
		<a href="out.php"><img border="0" align="top" src="../image/upp.png" width="20" height="20" style="padding:4px;"> Files Log (OUT)</a>
		<a href="dir.php"><img border="0" align="top" src="../image/file.png" width="20" height="20" style="padding:4px;"> Directory</a>
		</br></br></br></br></br></br></br></br>
		<a href="../laman_utama.php" style="background-color: 111" ><img border="0" align="top" src="../image/left.png" width="20" height="20" style="padding:4px;"> HOME SYSTEM</a>
		</div>
</div> 
			
			<form action="" method="post" enctype="multipart/form-data">
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
			<h2 style="font-family:helvetica;">Sila Edit Maklumat Berkenaan</h2>
		<hr>
		</br>
		<fieldset>
				<input type="hidden" name="id" value="<?php echo $id; ?>"/>
				<label class="form-label">No. Rujukan :</label>
				<?php echo $norujukan; ?><br /><br />
				<label class="form-label">Tarikh masuk :</label>
				<?php echo $tterima; ?><br /><br />
				<label class="form-label">Tarikh surat :</label>
				<?php echo $tsurat; ?><br /><br />
				<label class="form-label">Jenis surat :</label>
				<?php echo $jenis;?> 
				</br><br>
				<label class="form-label">Perkara :</label>
				<?php echo $perkara;?>
				</br>
				</br>
				<label class="form-label">Tindakan :</label>
				<?php echo $tindakan;?>
				</br>
				</br>
				<label class="form-label">Pegawai Berkaitan :</label>
				<input type="text" name="name" id="name" required="required" autocomplete="off" value="<?php error_reporting(0); echo $name; ?>" /><br/><br/>
				<label class="form-label">File Number:</label>
				<input type="text" name="dir" id="dir" required="required" autocomplete="off" value="<?php error_reporting(0); echo $dir; ?>" /><br/><br/>
				<label class="form-label">File Details (*if exist):</label>
				<select name="dirx" id="dirx" required="required" autocomplete="off" />
						<option value=" "<?php if($result['dirx'] == ' '): ?> selected="selected"<?php endif; ?>>--</option>
						<option value="A"<?php if($result['dirx'] == 'A'): ?> selected="selected"<?php endif; ?>>A</option>
						<option value="B"<?php if($result['dirx'] == 'B'): ?> selected="selected"<?php endif; ?>>B</option>
						<option value="C"<?php if($result['dirx'] == 'C'): ?> selected="selected"<?php endif; ?>>C</option>
						<option value="D"<?php if($result['dirx'] == 'D'): ?> selected="selected"<?php endif; ?>>D</option>
						<option value="E"<?php if($result['dirx'] == 'E'): ?> selected="selected"<?php endif; ?>>E</option>
					</select>
					<br/><br/>
				<label for="file">File:</label></td>
                <input type="file" name="file" id="file" title="Click here to select file to upload." required /></br>
			</br>
			
			</fieldset>
			</div>
			</br>
			<input type="submit" value=" Submit " class="formsub" name="submit" text-align="right" style=" margin-left: 35%;" /><br/>
			
			
			
			</form>
<?php
}
require('conn.php');

require('conn.php');

if (isset($_POST['submit']))
{

if (is_string($_POST['id']))
{
	date_default_timezone_set('Asia/Kuala_Lumpur');

$id = $_POST['id'];
$name = mysqli_real_escape_string($conn, $_POST['name']);
$dir = mysqli_real_escape_string($conn, $_POST['dir']);
$dirx = mysqli_real_escape_string($conn, $_POST['dirx']);
$file = mysqli_real_escape_string($conn,(md5(uniqid( $_FILES["file"]["name"],true))));
$time = date("Y-m-d H:i:s");


if ($name == '' || $dir == '' || $dirx == '' || $file == '')
{ 

$error = 'ERROR: Please fill in all required fields!';


valid($id,$name,$dir,$dirx,$file,$error);
}
else
{
	if (file_exists("download/web/" . $_FILES["file"]["name"]))
					{
						echo '<script language="javascript">alert(" Sorry!! Filename Already Exists...");
						window.history.go(-2);</script>';
					}
					else
					{
move_uploaded_file($_FILES["file"]["tmp_name"],
						"download/web/" . $file) ;
mysqli_query($conn, "UPDATE office SET name='$name',dir='$dir',dirx='$dirx',file='$file', timestmp='$time' WHERE id='$id'")
or die(mysqli_error($conn));
echo "<script>
             alert('Document successfully uploaded!!!'); 
             window.history.go(-2);
     </script>";

					}

$conn->close();



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
$name = $row['name'];
$dir = $row['dir'];
$dirx = $row['dirx'];
$file = $row['file'];


valid($id, $norujukan, $tterima, $tsurat, $jenis , $perkara, $tindakan, $name, $dir, $dirx, $file, '');
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