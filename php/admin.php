<?php
       $conn = mysqli_connect("localhost","root","","service_project") or die("fail");

       // sql delete record
       if(isset($_REQUEST['delete'])){
         $sql = "DELETE FROM inputuser WHERE mem_id = {$_REQUEST['mem_id']}";
         if(mysqli_query($conn, $sql)){
           echo "record deleted";
         }
         else{
           echo "error";
         }
       }
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/admin.css" >
    <link rel="stylesheet"  href="../css/all.css" >
    <link rel="stylesheet" type="text/css" href="../css/header_user.css" >
    <title>Vehicle service center</title>
       
    <style>
     .card{
       text-align: center;
       margin-left: 80px;
       margin-top: 100px;
     }

    

     
     </style>
 
  </head>
  <body>
    
    
 <!--navbar start  -->
 <nav class="navbar navbar-expand-sm navbar-light fixed-top bg-dark">
  <a class="navbar-brand text-white" href="#">ADMIN</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav v2  ">
    <li class="nav-item">
        <a class="nav-link text-white" href="admin.php">Dashborad</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="work.php">User Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="request.php">Request</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="contact_history.php">User contact</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="history.php">History</a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-white" href="technician.php">technician</a>
      </li>  
      <li class="nav-item">
        <a class="nav-link text-white" href="home.php">User Home</a>
      </li>  
    </ul>
  </div>  
  
</nav>
</div>
<!-- end navbar-->

<!-- card start -->
      

        <div class="row text-center mx-5">
          <div class="col-sm-4" >
            <div class="card shadow-lg bg-dark mb-3" style="border-radius: 20px;">
                <img src="../img//1.jpg" alt="" class="imf-fluid" style="border-radius: 100px;">
            </div>
          </div>


            <div class="col-sm-4" >
            <div class="card shadow-lg bg-dark mb-3" style="border-radius: 20px;">
                <img src="../img//3.jpg" alt="" class="imf-fluid" style="border-radius: 100px;">
            </div>
          </div>
           

            <div class="col-sm-4" >
            <div class="card shadow-lg bg-dark mb-3" style="border-radius: 20px;">
                <img src="../img//2.jpg" alt="" class="imf-fluid" style="border-radius: 100px;">
            </div>
          </div>
        </div>
<!-- card end -->
            

<!-- request table start -->
         </div>
         <div class=" r1 mx-5 mt-5 ">
              <p class=" p-2">List of Requester</p> 
         </div>
         <div class="container">
  
   <!-- startphp  -->
   <?php
    
      $sql = "SELECT * FROM inputuser";
      $result = mysqli_query($conn, $sql) or die("query unsucessful");

      if(mysqli_num_rows($result) > 0) {
   ?>
 
   <table class="table text-white">
       <thead>
      <tr style="background-color: black;">
        <th>ID</th>
        <th>Name</th>
        <th>Category</th>
        <th>Model</th>
        <th>Brand</th>
        <th>Date</th>
        <th>Time</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody style="background-color: red;">
    <?php
      while($row = mysqli_fetch_assoc($result)) {
    ?>    
      <tr>
        <td><?php echo $row['mem_id'];?></td>
        <td><?php echo $row['user_name'];?></td>
        <td><?php echo $row['category'];?> </td>
        <td><?php echo $row['v_model'];?></td>
        <td><?php echo $row['v_brand'];?></td>
        <td><?php echo $row['service_date'];?></td>
        <td><?php echo $row['service_time'];?></td>
        <td><?php echo '<form action="" method="POST"><input type ="hidden" name="mem_id" value=' . $row['mem_id'] . '><input type="submit" class="btn btn-sm btn-primary" name="delete" value="delete"></form>';?></td>
      </tr>
      <?php } ?>
    </tbody>
  </table>
  <?php }
  mysqli_close($conn)
  ?>

      </div>
    <!-- end reuqest table -->

        


</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
  </body>
</html>