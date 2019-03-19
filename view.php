<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>INDEX DEBUG DUHHHH</title>
<?php
require('conn.php');
include("auth.php");
?>
<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>

<link rel="stylesheet" type="text/css" href="css/jquery.css"/>
	 
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<script type="text/javascript" language="javascript" src="js/dt.js"></script>
</head>

<body>

<div>
		<h2>Sila pilih tarikh berkaitan</h2>
		<div>
			<table id="table_id" class="display" width="100%" cellspacing="0">
						<thead>
						<th>n</th>
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
					require('conn.php');			
					$count=1;
					$sel_query="Select * from office ORDER BY id desc;";
					$result = mysqli_query($conn,$sel_query);
					while($row = mysqli_fetch_assoc($result)) { ?>
					<tr>
					<td align="center"><?php echo $count; ?></td>
					<td align="center"><?php echo $row['norujukan']?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
					<td align="center"><?php echo $row['jenis']?></td>
					<td align="center"><?php echo $row['perkara']?></td>
					<td align="center"><?php echo $row['tindakan']?></td>
					
					<td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>">Edit</a></td><td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?>">Delete</a></td></tr>
					<?php $count++; } ?>
					</tbody>
	
		
    				
    	</table>
		</div>
	</div>
</body>
<script>
$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>
	
</html>
