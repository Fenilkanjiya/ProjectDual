<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['t_submit'])){
		if($_POST['t_name'] != "" || $_POST['t_city'] != "" || $_POST['t_email'] != ""){
			try{
				$t_name = $_POST['t_name'];
				$t_city = $_POST['t_city'];
				$t_mobile = $_POST['t_mobile'];
				$t_email = $_POST['t_email'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `techinician` VALUES ('', '$t_name', '$t_city', '$t_mobile', '$t_email')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			$conn = null;
			header('location:technician.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'technician_add.php'</script>
			";
		}
	}
?>