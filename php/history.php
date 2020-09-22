<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

      $sql = "SELECT * FROM inputuser";
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
      </tr>
    </thead>
    <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)) {
    ?>    
      <tr>
        <td><?php echo $row['user_id'];?></td>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['category'];?> </td>
        <td><?php echo $row['v_model'];?></td>
        <td><?php echo $row['v_brand'];?></td>
        <td><?php echo $row['v_ragi_number'];?></td>
        <td><?php echo $row['service_date'];?>-</td>
        <td><?php echo $row['service_time'];?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php }
  mysqli_close($conn)
  ?>
</div>
</body>
</html>
