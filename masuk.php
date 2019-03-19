<html>
<head>
<link rel="icon" href="image/icon.png" type="image/png" sizes="16x16">
<title>Surat Masuk Bulan Terkini</title>
<?php
require('conn.php');
include("auth.php");
?>

<script type="text/javascript" charset="utf8" src="js/jquery.js"></script>


<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/bs.css">
  <script src="js/bs.js"></script>
  <link rel="stylesheet" type="text/css" href="css/jquery.css"/>
 <link rel="stylesheet" type="text/css" href="css/table.css?saasadsa">
   <script type="text/javascript" charset="utf8" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquerydt.js"></script>
<link rel="stylesheet" type="text/css" href="css/dt.css">
<script type="text/javascript" language="javascript" src="js/dt.js"></script>
</head>

<body>

<div class="sidenav">
    <a href="laman_utama.php"><img border="0" align="top" src="image/homee.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Laman Utama</a>
   <button class="dropdown-btn"><img border="0" align="top" src="image/docc.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Pengisian Log
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-container">
        <a href="daftar_masuk.php">Surat Masuk</a>
        <a href="daftar_keluar.php">Surat Keluar</a>
    </div>
    <a href="masuk.php"><img border="0" align="top" src="image/downn.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Surat Masuk</a>
    <a href="keluar.php"><img border="0" align="top" src="image/upp.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Surat Keluar</a>
    <button class="dropdown-btn"><img border="0" align="top" src="image/searchh.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> Carian
      <i class="fa fa-caret-down"></i>
    </button>
      <div class="dropdown-container">
        <a href="tarikh.php">Tarikh</a>
        <a href="carian.php">Kata Kunci</a>
    </div>
    <a href="about.php"><img border="0" align="top" src="image/qqq.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"> About</a>
    </br></br></br></br></br></br></br></br>
    <a href="DDS/main_page.php" style="background-color: FFA500" ><img border="0" align="top" src="image/file.png" width="28" height="28" style="padding:4px;"> FDM SYSTEM</a>
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
  text-decoration: none;">Log Out<img border="0" align="top" src="image/logout.png" width="28" height="28" style="padding:4px; margin-bottom:5px;"></a>
<div>

<div style=" ">

<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#home">Hari Terkini</a></li>
    <li><a data-toggle="tab" href="#menu1">Minggu Terkini</a></li>
    <li><a data-toggle="tab" href="#menu2">Bulan Terkini</a></li>
  </ul>

  <div class="tab-content">
    <div id="home" class="tab-pane fade in active">
      <div>
       <h2 style="font-family:helvetica;">Surat Masuk Hari Terkini</h2>
    <hr>
    </br>
    <div>
      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
            <th>Bil</th>
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
          //$sel_query="Select * from office ORDER BY id desc;";
          $sel_query="SELECT * FROM office WHERE tterima > DATE_SUB(NOW(), INTERVAL 1 DAY) AND jenis = 'masuk' ORDER BY id DESC;";
          
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
          <td width="5%" align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $row['norujukan']?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
          <td align="center"><?php echo $row['jenis']?></td>
          <td align="left"><?php echo $row['perkara']?></td>
          <td align="left"><?php echo $row['tindakan']?></td>
          
          <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="image/edit.png" width="28" height="28" style="padding:4px;"></a></td>
          <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"><img border="0" align="top" src="image/bin.png" width="28" height="28" style="padding:4px;"></a></td></tr>
          <?php $count++; } ?>
          </tbody>
  
    
            
      </table>
    </div>


      </div>
    </div>
    <div id="menu1" class="tab-pane fade">
        <div>
    

    <h2 style="font-family:helvetica;">Surat Masuk Minggu Terkini</h2>
    <hr>
    </br>
    <div>
      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
            <th>Bil</th>
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
          //$sel_query="Select * from office ORDER BY id desc;";
          $sel_query="SELECT * FROM office WHERE tterima > DATE_SUB(NOW(), INTERVAL 1 WEEK) AND jenis = 'masuk' ORDER BY id DESC;";
          
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
          <td width="5%" align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $row['norujukan']?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
          <td align="center"><?php echo $row['jenis']?></td>
          <td align="left"><?php echo $row['perkara']?></td>
          <td align="left"><?php echo $row['tindakan']?></td>
          
          <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="image/edit.png" width="28" height="28" style="padding:4px;"></a></td>
          <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"><img border="0" align="top" src="image/bin.png" width="28" height="28" style="padding:4px;"></a></td></tr>
          <?php $count++; } ?>
          </tbody>
  
    
            
      </table>
    </div>
  </div>


    </div>
    <div id="menu2" class="tab-pane fade">
     <div>
    

    <h2 style="font-family:helvetica;">Surat Masuk Bulan Terkini</h2>
    <hr>
    </br>
    <div>
      <table id="table_id" class="display" width="100%" cellspacing="0">
            <thead>
            <th>Bil</th>
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
          //$sel_query="Select * from office ORDER BY id desc;";
          $sel_query="SELECT * FROM office WHERE tterima > DATE_SUB(NOW(), INTERVAL 1 MONTH) AND jenis = 'masuk' ORDER BY id DESC;";
          
          
          
          $result = mysqli_query($conn,$sel_query);
          while($row = mysqli_fetch_assoc($result)) { ?>
          <tr>
          <td width="5%" align="center"><?php echo $count; ?></td>
          <td align="center"><?php echo $row['norujukan']?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tterima']));?></td>
          <td align="center"><?php echo date('d-m-Y',strtotime($row['tsurat']));?></td>
          <td align="center"><?php echo $row['jenis']?></td>
          <td align="left"><?php echo $row['perkara']?></td>
          <td align="left"><?php echo $row['tindakan']?></td>
          
          <td align="center"><a href="edit.php?id=<?php echo $row["id"]; ?>"><img border="0" align="top" src="image/edit.png" width="28" height="28" style="padding:4px;"></a></td>
          <td align="center"><a href="delete.php?id=<?php echo $row["id"]; ?> " onclick="return confirm('Are you sure you want to delete this item?');"><img border="0" align="top" src="image/bin.png" width="28" height="28" style="padding:4px;"></a></td></tr>
          <?php $count++; } ?>
          </tbody>
  
    
            
      </table>
    </div>
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
