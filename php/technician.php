<?php
       $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

       // sql delete record
       if(isset($_REQUEST['delete'])){
         $sql = "DELETE FROM techinician WHERE t_id = {$_REQUEST['t_id']}";
         if(mysqli_query($conn, $sql)){
           echo "record deleted";
         }
         else{
           echo "error";
         }
       }
?>

<?php
include('header.php');
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
  <link rel="stylesheet" type="text/css" href="../css/admin.css" >
  <link rel="stylesheet" type="text/css" href="../css/home.css" >
</head>
<body>
 <!-- Start Header Jumbotron-->
<div class="container">
         <div class=" r1 mx-5 mt-5 ">
              <p class="p-2"><b>List Of Technician</b></p> 
         </div>
         <?php
      $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

      $sql = "SELECT * FROM techinician";
      $result = mysqli_query($conn, $sql) or die("query unsucessful");

      if(mysqli_num_rows($result) > 0) {
   ?>
         <table class="table text-white">
       <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Mobile No.</th>
        <th>Email</th>
        <th>City</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    <?php
      while($row = mysqli_fetch_assoc($result)) {
    ?>  
      <tr>
        <td><?php echo $row['t_id'];?></td>
        <td><?php echo $row['t_name'];?></td>
        <td><?php echo $row['t_mobile'];?></td>
        <td><?php echo $row['t_email'];?></td>
        <td><?php echo $row['t_city'];?></td>
        <td><?php echo '<form action="" method="POST"><input type ="hidden" name="t_id" value=' . $row['t_id'] . '><input type="submit" class="btn btn-sm btn-danger" name="delete" value="delete"></form>';?></td>
</tr>
<?php } ?>
   </tbody>
  </table>
  <?php }
  mysqli_close($conn)
  ?>
      </div>
   
    </div>
</div>


<!-- request table start -->
         
    <!-- end reuqest table -->

        

<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  
</body>
</html>
