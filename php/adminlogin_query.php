<?php
	session_start();
	
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		if($_POST['admin_name'] != "" || $_POST['admin_password'] != ""){
			$admin_name = $_POST['admin_name'];
			$admin_password = $_POST['admin_password'];
			$sql = "SELECT * FROM `admin_login` WHERE `admin_name`=? AND `admin_password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($admin_name,$admin_password));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['admin_id']; 
				header("location: admin.php");
			} else{
				echo "
				<script>alert('Invalid username or password')</script>
				<script>window.location = 'index.php'</script>
				";
			}
		}else{
			echo "
				<script>alert('Please complete the required field!')</script>
				<script>window.location = 'index.php'</script>
			";
		}
	}
?>