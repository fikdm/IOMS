<?php

require('conn.php');
include("auth.php");
?>
<?php
	require('conn.php');	
	$with_any_one_of = "";
	$with_the_exact_of = "";
	$without = "";
	$starts_with = "";
	$search_in = "";
	$advance_search_submit = "";
	
	$queryCondition = "";
	if(!empty($_POST["search"])) {
		$advance_search_submit = $_POST["advance_search_submit"];
		foreach($_POST["search"] as $k=>$v){
			if(!empty($v)) {

				$queryCases = array("with_any_one_of","with_the_exact_of","without","starts_with");
				if(in_array($k,$queryCases)) {
					if(!empty($queryCondition)) {
						$queryCondition .= " AND ";
					} else {
						$queryCondition .= " WHERE ";
					}
				}
				switch($k) {
					case "with_any_one_of":
						$with_any_one_of = $v;
						$wordsAry = explode(" ", $v);
						$wordsCount = count($wordsAry);
						for($i=0;$i<$wordsCount;$i++) {
							if(!empty($_POST["search"]["search_in"])) {
								$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $wordsAry[$i] . "%'";
							} else {
								$queryCondition .= "norujukan LIKE '" . $wordsAry[$i] . "%' OR perkara LIKE '" . $wordsAry[$i] . "%' OR tindakan LIKE '" . $wordsAry[$i] . "%'";
							}
							if($i!=$wordsCount-1) {
								$queryCondition .= " OR ";
							}
						}
						break;
					case "with_the_exact_of":
						$with_the_exact_of = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "norujukan LIKE '%" . $v . "%' OR perkara LIKE '%" . $v . "%' OR tindakan LIKE '%" . $v . "%'";
						}
						break;
					case "without":
						$without = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " NOT LIKE '%" . $v . "%'";
						} else {
							$queryCondition .= "norujukan NOT LIKE '%" . $v . "%' AND perkara NOT LIKE '%" . $v . "%' AND tindakan NOT LIKE '%" . $v . "%'";
						}
						break;
					case "starts_with":
						$starts_with = $v;
						if(!empty($_POST["search"]["search_in"])) {
							$queryCondition .= $_POST["search"]["search_in"] . " LIKE '" . $v . "%'";
						} else {
							$queryCondition .= "norujukan LIKE '" . $v . "%' OR perkara LIKE '" . $v . "%' OR tindakan LIKE '" . $v . "%'";
						}
						break;
					case "search_in":
						$search_in = $_POST["search"]["search_in"];
						break;
				}
			}
		}
	}
	$orderby = " ORDER BY norujukan"; 
	$sql = "SELECT * FROM office " . $queryCondition;
	$result = mysqli_query($conn,$sql);
	
?>
<html>
	<head>
	<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.css"/>
	 
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<link rel="stylesheet" type="text/css" href="css/table.css">

<script type="text/javascript" language="javascript" src="js/dt.js"></script>

	<title>Carian</title>
	<script>
		//* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */	
		function showHideAdvanceSearch() {
			if(document.getElementById("advanced-search-box").style.display=="none") {
				document.getElementById("advanced-search-box").style.display = "block";
				document.getElementById("advance_search_submit").value= "1";
			} else {
				document.getElementById("advanced-search-box").style.display = "none";
				document.getElementById("with_the_exact_of").value= "";
				document.getElementById("without").value= "";
				document.getElementById("starts_with").value= "";
				document.getElementById("search_in").value= "";
				document.getElementById("advance_search_submit").value= "";
			}
		}
	</script>
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
		
			<form name="frmSearch" method="post" action="carian.php">
			
			<input type="hidden" id="advance_search_submit" name="advance_search_submit" value="<?php echo $advance_search_submit; ?>">
			<div class="search-box">
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
			<h2 style="font-family:helvetica;">Sila Isi Maklumat Carian</h2>
		<hr>
		</br>
				<div>
					<input type="text" name="search[with_any_one_of]" class="demoInputBox" value="<?php echo $with_any_one_of; ?>"	/>
					<span id="advance_search_link" onClick="showHideAdvanceSearch()">Lebihan</span>
				</div>				
				<div id="advanced-search-box" <?php if(empty($advance_search_submit)) { ?>style="display:none;"<?php } ?>>
					<label class="search-label"><b>Isi maklumat berkaitan.:</label>
					<div>
						</br><input type="text" name="search[with_the_exact_of]" id="with_the_exact_of" class="demoInputBox" value="<?php echo $with_the_exact_of; ?>"	/>
					</div>
					<label class="search-label">Kecuali.:</label>
					<div>
						</br><input type="text" name="search[without]" id="without" class="demoInputBox" value="<?php echo $without; ?>"	/>
					</div>
					<label class="search-label">Bermula.:</label>
					<div>
						</br><input type="text" name="search[starts_with]" id="starts_with" class="demoInputBox" value="<?php echo $starts_with; ?>"	/>
					</div>
					<label class="search-label">Kata kunci dari.:</label>
					<div>
						</br><select name="search[search_in]" id="search_in" class="demoInputBox">
							<option value="">Sila pilih maklumat berkaitan</b></option>
							<option value="norujukan" <?php if($search_in=="norujukan") { echo "selected"; } ?>>No. Rujukan</option>
							<option value="perkara" <?php if($search_in=="perkara") { echo "selected"; } ?>>Perkara</option>
							<option value="tindakan" <?php if($search_in=="tindakan") { echo "selected"; } ?>>Tindakan</option>
						</select>
					</div>
				</div>
				</br>
				<div>
					<input type="submit" name="go" class="btnSearch" value="Search">
				</div>
				</br>
			
			</form>
			<hr style="height:5px;border:none;color:#333;background-color:#333;">
			
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
			
			if (isset($_POST['search'])){
    				
					require('conn.php');
			
			$count=1;
			
				while($row = mysqli_fetch_assoc($result)) { 
		
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
		$(document).ready( function () {
    $('#table_id').DataTable();
} );

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