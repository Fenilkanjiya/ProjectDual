<?php
  include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>service center</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <!-- <<style>
  .custom h2{
    /* margin-top:50px; */
    margin-bottom:10px;
    font-size:50px;
  }
  .custom{
    font-size: 25px;
    margin-top: 81px;
  }
  </style> -->
</head>
<body>

<div class="container custom">

  <h2>Contact History</h2>
  <p>User all Messages in this table</p> 
   <!-- startphp  -->
   <?php
      $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

      $sql = "SELECT * FROM contact_tbl";
      $result = mysqli_query($conn, $sql) or die("query unsucessful");

      if(mysqli_num_rows($result) > 0) {
   ?>
 
   <table class="table">
       <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Subject</th>
        <th>Email</th>
        <th>Message</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)) {
    ?>    
      <tr>
        <td><?php echo $row['contact_id'];?></td>
        <td><?php echo $row['contact_name'];?></td>
        <td><?php echo $row['contact_subject'];?> </td>
        <td><?php echo $row['contact_email'];?></td>
        <td><?php echo $row['contact_discription'];?></td>
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
