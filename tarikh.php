<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Carian</title>
<?php
require('conn.php');
include("auth.php");
?>
<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.css"/>
<link rel="stylesheet" type="text/css" href="css/table.css"/>
	 
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<script type="text/javascript" language="javascript" src="js/dt.js"></script>
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
	<div>		
<h2 style="font-family:helvetica;">Sila Isi Tarikh Berkaitan</h2>
		<hr>
		</br>





	</div>

	<div>
		<form method="POST">
    		<label>From: </label><input type="date" name="from">
    		<label>To: </label><input type="date" name="to">
    		<input type="submit" value="Get Data" name="submit">
		</form>
	</div>
	</br>
<hr style="height:5px;border:none;color:#333;background-color:#333;">
</br>
	<div>
		
		<div>
			<table id="table_id" class="display" width="100%" cellspacing="0">
						<thead>
							<th>Bil.</th>
							<th>No. Rujukan</th>
							<th>Tarikh terima:</th>
							<th>Tarikh surat</th>
							<th>Jenis fail</th>
							<th>Perkara</th>
							<th>Tindakan</th>
							<th><font color='Red'>Edit</font></th>
							<th><font color='Red'>Delete</font></th>
						</thead>
						<tbody>
    		<?php
    			if (isset($_POST['submit'])){			
					require('conn.php');		
    				$from=date('Y-m-d',strtotime($_POST['from']));
    				$to=date('Y-m-d',strtotime($_POST['to']));
		
    				//MySQLi Procedural
    				//$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
    				//while($orow=mysqli_fetch_array($oquery)){
    				/*	?>
    					<tr>
    						<td><?php echo $orow['logid']?></td>
    						<td><?php echo $orow['username']?></td>
    						<td><?php echo $orow['login_date']?></td>
    					</tr>
    					<?php */
    				//}
     
    				//MySQLi Object-oriented
					$count=1;
    				
    				$sel_query="SELECT * FROM office WHERE tterima between '$from' and '$to' ORDER BY id desc;";
					
					
					
					$result = mysqli_query($conn,$sel_query);
					while($row = mysqli_fetch_assoc($result)){
    					?>
					
    					<tr>
					<td align="center"><?php echo $count; ?></td>
					<td align="center"><?php echo $row['norujukan']?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
					<td align="center"><?php echo $row['jenis']?></td>
					<td align="left"><?php echo $row['perkara']?></td>
					<td align="left"><?php echo $row['tindakan']?></td>
					
					<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="image/edit.png" width="20" height="20" style="padding:4px;"></a></td>
					<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"><img border="0" align="top" src="image/bin.png" width="20" height="20" style="padding:4px;"></a></td></tr>
    					
						
						<?php $count++;
    				
					}
					
					
					
					
					
    			}
    		?>
    		</tbody>
    	</table>
		</div>
	</div>
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

$(document).ready( function () {
    $('#table_id').DataTable();
} );


</script>
</body>
</html>