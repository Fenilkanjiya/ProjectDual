<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['register'])){
		if($_POST['user_name'] != "" || $_POST['category'] != "" || $_POST['v_model'] != ""){
			try{
				$user_name = $_POST['user_name'];
				$category = $_POST['category'];
				$v_model = $_POST['v_model'];
				$v_brand = $_POST['v_brand'];
                $v_ragi_number = $_POST['v_ragi_number'];
                $discription = $_POST['discription'];
                $service_date = $_POST['service_date'];
                $service_time = $_POST['service_time'];
                $v_pickup = $_POST['v_pickup'];
                $v_drop = $_POST['v_drop'];
                $pickup_address = $_POST['pickup_address'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `inputuser` VALUES ('', '$user_name', '$category', '$v_model', '$v_brand', '$v_ragi_number', '$discription' ,'$service_date' ,'$service_time', '$v_pickup', '$v_drop', '$pickup_address')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			$conn = null;
			header('location:index.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'user_input.php'</script>
			";
		}
	}
?>