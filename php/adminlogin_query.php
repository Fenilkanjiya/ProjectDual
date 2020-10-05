<?php
	session_start();
	
	require_once 'conn.php';
	
	if(ISSET($_POST['login'])){
		if($_POST['a_username'] = "admin" || $_POST['a_password'] = "admin"){
			$ausername = $_POST['a_username'];
			$apassword = $_POST['a_password'];
			$sql = "SELECT * FROM `admin_login` WHERE `a_username`=? AND `a_password`=? ";
			$query = $conn->prepare($sql);
			$query->execute(array($ausername,$apassword));
			$row = $query->rowCount();
			$fetch = $query->fetch();
			if($row > 0) {
				$_SESSION['user'] = $fetch['a_login_id']; 
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