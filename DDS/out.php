<html>

<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Surat Keluar Bulan Terkini</title>
<?php
require('conn.php');
include("auth.php");
?>
<script type="text/javascript" charset="utf8" src="../js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="../css/jquery.css"/>
	 
<script type="text/javascript" src="../js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="../css/dt.css">
<script type="text/javascript" language="javascript" src="../js/dt.js"></script>
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
		


#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
	margin-left: 15%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
<div class="sidenav">
		<a href="main_page.php"><img border="0" align="top" src="../image/homee.png?macarena" width="20" height="20" style="padding:4px;"> Home Page</a>
		<a href="in.php"><img border="0" align="top" src="../image/downn.png" width="20" height="20" style="padding:4px;"> Files Log (IN)</a>
		<a href="out.php"><img border="0" align="top" src="../image/upp.png" width="20" height="20" style="padding:4px;"> Files Log (OUT)</a>
		<a href="dir.php"><img border="0" align="top" src="../image/file.png" width="20" height="20" style="padding:4px;"> Directory</a>
		</br></br></br></br></br></br></br></br>
		<a href="../laman_utama.php" style="background-color: 111" ><img border="0" align="top" src="../image/left.png" width="20" height="20" style="padding:4px;"> HOME SYSTEM</a>
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
<div>

		<h2 style="font-family:helvetica;">Surat Keluar Bulan Terkini</h2>
		<hr>
		</br>
		<div>
			<table id="table_id" class="display" width="100%" cellspacing="0">
						<thead>
							<th>Bil.</th>
							<th>No. Rujukan</th>
							<!--
							<th>Tarikh terima:</th>
							<th>Tarikh surat</th>
							<th>Jenis fail</th>
							-->
							<th>Perkara</th>
							<th>Tindakan</th>
							<th><font color='Red'>Upload</font></th>
							<th><font color='Red'>Edit</font></th>
							<th><font color='Red'>Delete</font></th>
						</thead>
						<tbody>
    		<?php
    			
    				
					
					require('conn.php');

					
					$count=1;
					//$sel_query="Select * from office ORDER BY id desc;";
					$sel_query="SELECT * FROM office WHERE (name = '' OR dir = '' OR file = '') AND tterima > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND jenis = 'keluar' ORDER BY id DESC;";
					
					
					
					$result = mysqli_query($conn,$sel_query);
					while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
					<td align="center"><?php echo $count; ?></td>
					<td align="center"><?php echo $row['norujukan']?></td>
					<!--
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
					<td align="center"><?php echo $row['jenis']?></td> -->
					<td style="padding: 5px 10px 5px 5px; align="left"><?php echo $row['perkara']?></td>
					<td style="padding: 5px 10px 5px 5px; align="left"><?php echo $row['tindakan']?></td>
					<td align="center"><a href="upload.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="../image/upload.png" width="20" height="20" style="padding:4px;"></a></td>
					<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="../image/edit.png" width="20" height="20" style="padding:4px;"></a></td>
					<td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"><img border="0" align="top" src="../image/bin.png" width="20" height="20" style="padding:4px;"></a></td></tr>
					<?php $count++; } ?>
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
