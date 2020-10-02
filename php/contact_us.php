
<?php

	require_once 'conn.php';
 
	if(ISSET($_POST['submit'])){
		if($_POST['name'] != "" || $_POST['subject'] != "" || $_POST['email'] != ""){
			try{
				$contact_name = $_POST['name'];
				$contact_subject = $_POST['subject'];
                $contact_email = $_POST['email'];
                $contact_discription = $_POST['message'];
               
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$sql = "INSERT INTO `contact_tbl` VALUES ('', '$contact_name',  '$contact_email',  '$contact_discription','$contact_subject' )";
				$conn->exec($sql);
			}catch(PDOException $e){
				echo $e->getMessage();
			}
	
			$conn = null;
			header('location:home.php');
		}else{
			echo "
				<script>alert('Please fill up the required field!')</script>
				<script>window.location = 'home.php'</script>
			";
		}
	}
?>