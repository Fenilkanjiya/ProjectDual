<?php
	require_once 'conn.php';
 
	if(ISSET($_POST['submit'])){
		if($_POST['a_name'] != "" || $_POST['a_category'] != "" || $_POST['a_price'] != ""){
			try{
                $a_request_id = $_POST['a_request_id'];
				$a_name = $_POST['a_name'];
				$a_category = $_POST['a_category'];
				$a_v_model = $_POST['a_v_model'];
				$a_v_brand = $_POST['a_v_brand'];
                $a_v_ragi_number = $_POST['a_v_ragi_number'];
                $a_discription = $_POST['a_discription'];
                $a_date = $_POST['a_date'];
                $a_time = $_POST['a_time'];
                $a_address = $_POST['a_address'];
                $a_price = $_POST['a_price'];
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `history` VALUES ('', '$a_request_id',  '$a_name', '$a_category', '$a_v_model', '$a_v_brand', '$a_v_ragi_number', '$a_discription' ,'$a_date' ,'$a_time', '$a_address', '$a_price')";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			$conn = null;
			header('location:request.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'request.php'</script>
			";
		}
	}
?>