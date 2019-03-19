<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Surat Masuk Bulan Terkini</title>
<?php
require('conn.php');
include("auth.php");
?>

<script type="text/javascript" charset="utf8" src="../js/jquery.js"></script>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/bs.css">
  <script src="../js/bs.js"></script>
  <link rel="stylesheet" type="text/css" href="../css/jquery.css"/>
   <script type="text/javascript" charset="utf8" src="../js/jquery.js"></script>
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
      background-image: linear-gradient(#e6e6ff, #ffffff);
			
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

		.keluar {
      color:blue;
    }

.masuk {
      color:red;
    }
		
.nobr { white-space: nowrap }

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
		<a href="main_page.php"><img border="0" align="top" src="../image/homee.png?macarena" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Home Page</a>
		<a href="in.php"><img border="0" align="top" src="../image/downn.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Files Log (IN)</a>
		<a href="out.php"><img border="0" align="top" src="../image/upp.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Files Log (OUT)</a>
		<a href="dir.php"><img border="0" align="top" src="../image/file.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Directory</a>
		</br></br></br></br></br></br></br></br>
		<a href="../laman_utama.php" style="background-color: 111; margin-bottom:5px;" ><img border="0" align="top" src="../image/left.png" width="28" height="28" style="padding:4px;"> MAIN SYSTEM</a>
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
	text-decoration: none;">Log Out<img border="0" align="top" src="../image/logout.png" width="28" height="28" style="padding:4px;"></a>
<div>

<div class="container">
<form method="POST">
<label> File:.</label>
 <select name="number"> 
<?php 
foreach (range(0,900) as $number)
 echo "<option value='$number'>$number</option>";
 ?>
</select><p>&nbsp;&nbsp;&nbsp;</p>
 
<label> XFile:.</label>
 <select name="alp">
  <option value=" ">--</option>
            <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
            <option value="E">E</option>


<?php 
//foreach( range('A' ,'E')as $alp)
//echo "<option value='$alp'>$alp</option>";
 ?>
</select><p>&nbsp;&nbsp;&nbsp;</p>
<input type="submit" value="Get Data" name="submit">
</form>
</div>
<div style=" background-image: linear-gradient(#e6e6ff, #ffffff); height:300px;">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
    <li><a data-toggle="tab" href="#menu1">File Log</a></li>
    <li><a data-toggle="tab" href="#menu2">File Summary</a></li>
    <li><a data-toggle="tab" href="#menu3">List</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div>
        <?php
          if (isset($_POST['submit'])){     
          require('conn.php');    
            $number = $_POST['number'];
            $alp = $_POST['alp'];
    
            //MySQLi Procedural
            //$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
            //while($orow=mysqli_fetch_array($oquery)){
            /*  ?>
              <tr>
                <td><?php echo $orow['logid']?></td>
                <td><?php echo $orow['username']?></td>
                <td><?php echo $orow['login_date']?></td>
              </tr>
              <?php */
            //}
     
            //MySQLi Object-oriented
         {
              ?>
          
              
            
            <?php echo "<h4>File ";
            echo $number;
            echo $alp;
            echo "</h4>";
            
          }
          
          
          
          
          
          }
        ?>


      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
      <h3>Fail Log</h3>
        <div>
    

    <div>
      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
              <th width="10%">Bil.</th>
              <th>No. Rujukan</th>
               <th>Pegawai Bertugas</th>
               <th>Masa Fail Dimasukkan</th>
            </thead>
            <tbody>
        <?php
          if (isset($_POST['submit'])){     
          require('conn.php');    
            $number = $_POST['number'];
            $alp = $_POST['alp'];
    
            //MySQLi Procedural
            //$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
            //while($orow=mysqli_fetch_array($oquery)){
            /*  ?>
              <tr>
                <td><?php echo $orow['logid']?></td>
                <td><?php echo $orow['username']?></td>
                <td><?php echo $orow['login_date']?></td>
              </tr>
              <?php */
            //}
     
            //MySQLi Object-oriented
          $count=1;
            
            $sel_query="SELECT * FROM office WHERE dir ='$number' and dirx = '$alp' ORDER BY tsurat desc;";
          
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)){
              ?>
          
              <tr>
          <td width="10%" align="left"><?php echo $count; ?></td>
          <td align="left"><?php echo $row['norujukan']?></td>
          <td align="left"><?php echo $row['name']?></td>
          <td align="left"><?php echo $row['timestmp']?></td>
          
         </tr>
              
            
            <?php $count++;
            
          }
          
          
          
          
          
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>


    </div>
    <div id="menu2" class="tab-pane fade">
      <h3>Fail Summary</h3>
     <div>
    

    <div>
      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
              <th width="10%">Bil.</th>
              <th>Summary</th>
            </thead>
            <tbody>
        <?php
          if (isset($_POST['submit'])){     
          require('conn.php');    
            $number = $_POST['number'];
            $alp = $_POST['alp'];
    
            //MySQLi Procedural
            //$oquery=mysqli_query($conn,"select * from `login` where login_date between '$from' and '$to'");
            //while($orow=mysqli_fetch_array($oquery)){
            /*  ?>
              <tr>
                <td><?php echo $orow['logid']?></td>
                <td><?php echo $orow['username']?></td>
                <td><?php echo $orow['login_date']?></td>
              </tr>
              <?php */
            //}
     
            //MySQLi Object-oriented
          $count=1;
            
            $sel_query="SELECT * FROM office WHERE dir ='$number' and dirx = '$alp' ORDER BY tsurat desc;";
          
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)){
              ?>
          
              <tr>
                <div class="keluar">
          <td width="10%" align="left" class="<?php echo $row['jenis'];?>"><?php echo $count; ?></td>
          <td align="left" class="<?php echo $row['jenis'];?>"><?php echo "Surat tentang ";?><b><?php echo $row['perkara']?></b><?php echo " Bertarikh ";?><b><?php echo $row['tsurat']?></b><?php 
            if($row['jenis'] == "masuk"){
              echo " daripada ";
            }
            else{
              echo " dihantar kepada ";
            }



          ?><b><?php echo $row['location']?></b><?php echo " pada ";?><b><?php echo $row['tterima']?></b></td>
                </div>
         </tr>
              
            
            <?php $count++;
            
          }
          
          
          
          
          
          }
        ?>
        </tbody>
      </table>
    </div>
  </div>
    </div>
    <div id="menu3" class="tab-pane fade">
      <h3>List</h3>
      <div>
		
		<div>
			<table id="table_id" class="display" width="100%" cellspacing="0">
						<thead>
							<th width="10%">Bil.</th>
							<th>No. Rujukan</th>
							<th>Tarikh terima:</th>
							<th>Tarikh surat</th>
							<th>Jenis fail</th>
							<th>Perkara</th>
							<th>Tindakan</th>
							<th>Disahkan Oleh</th>
							<th><font color='Red'>Download</font></th>
							<th><font color='Red'>View</font></th>
						</thead>
						<tbody>
    		<?php
    			if (isset($_POST['submit'])){			
					require('conn.php');		
    				$number = $_POST['number'];
    				$alp = $_POST['alp'];
		
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
    				
    				$sel_query="SELECT * FROM office WHERE dir ='$number' and dirx = '$alp' ORDER BY tsurat desc;";
					
					
					
					$result = mysqli_query($conn,$sel_query);
					while($row = mysqli_fetch_assoc($result)){
    					?>
					
    					<tr>
					<td align="center" width="10%"><?php echo $count; ?></td>
					<td align="center"><?php echo $row['norujukan']?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
					<td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
					<td align="center"><?php echo $row['jenis']?></td>
					<td align="left"><?php echo $row['perkara']?></td>
					<td align="left"><?php echo $row['tindakan']?></td>
          <td align="left"><?php echo $row['name']?></td>
          <td align="center"><?php echo "<a title='Click here to download in file.' 
         href='download.php?id={$row['file']}'"; ?>><img border="0" align="top" src="../image/down.png" width="20" height="20" style="padding:4px;"></a></td>
         <td align="center"><?php echo "<a target='_blank' title='View file.' 
         href='download/web/viewer.html?file={$row['file']}'"; ?>><img border="0" align="top" src="../image/file1.png" width="20" height="20"  style="padding:4px;"></a></td>
          </tr>
					
          <a href="download/web/viewer.html?file=5a0941578208d5e112a7351eb474ed1e.pdf">


					</tr>
    					
						
						<?php $count++;
    				
					}
					
					
					
					
					
    			}
    		?>
    		</tbody>
    	</table>
		</div>
	</div>
	  
	  
	  
    </div>
  </div>


		







	</div>
</div>
</a></tbody></table></div></div></div></div>
<script>
$(document).ready(function() {
    $('table.display').DataTable();
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
