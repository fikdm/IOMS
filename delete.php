<html>
<body>
<?php
					require('conn.php');
					include("auth.php");
					$id=$_REQUEST['id'];
					if($_SESSION['username'] == 'pkg_admin'){
						$query = "DELETE FROM office WHERE id=$id"; 
						$result = mysqli_query($conn,$query) or die ( mysqli_error($conn));
						header('Location: ' . $_SERVER['HTTP_REFERER']);
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