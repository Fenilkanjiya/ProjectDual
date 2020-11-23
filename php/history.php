<?php
include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Vehicle service center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>HISTORY</h2>
  <p>User all service information in this table</p> 
   <!-- startphp  -->
   <?php
      $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

      $sql = "SELECT * FROM history";
      $result = mysqli_query($conn, $sql) or die("query unsucessful");

      if(mysqli_num_rows($result) > 0) {
   ?>
 
   <table class="table">
       <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Model</th>
        <th>Brand</th>
        <th>Ragi.No</th>
        <th>Date</th>
        <th>Time</th>
        <th>Price</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)) {
    ?>    
      <tr>
        <td><?php echo $row['a_request_id'];?></td>
        <td><?php echo $row['a_name'];?></td>
        <td><?php echo $row['a_category'];?> </td>
        <td><?php echo $row['a_v_model'];?></td>
        <td><?php echo $row['a_v_brand'];?></td>
        <td><?php echo $row['a_v_ragi_number'];?></td>
        <td><?php echo $row['a_date'];?>-</td>
        <td><?php echo $row['a_time'];?></td>
        <td><?php echo $row['a_price'];?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php }
  mysqli_close($conn)
  ?>

</div>
 <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>
