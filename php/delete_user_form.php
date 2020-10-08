<!-- 
  <form action="" method="POST">	
				

				<div class="form-group">
					<label>Request Id</label>
					<input type="text" class="form-control" name="mem_id" />
				</div>
                
    </form>
				 -->

<?php
    $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

    
       $sql = "DELETE FROM inputuser WHERE mem_id=4";

          if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            } else {
            echo "Error deleting record: " . $conn->error;
        }


$conn->close();
?>

