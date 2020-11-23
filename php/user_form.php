
  <form action="" method="POST">	
				

				<div class="form-group">
					<label>Request Id</label>
					<input type="text" class="form-control" name="id" value="mem_id" />
				</div>
           <input type="submit" class="btn btn-success" value="delete" name="delete">
                
    </form>
				

<?php
    $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

    if(ISSET($_POST['delete'])){
      $sql = "DELETE FROM inputuser WHERE id = '$mem_id'";

          if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            } else {
            echo "Error deleting record: " . $conn->error;
        }
      }
      else{
        echo ("fail");
      }

$conn->close();
?>