<?php
require_once 'conn.php';
 
session_start();
 if($_SESSION['user']){
  $username = $_SESSION['username'];
 }else{
   echo "please login";
 }
 $username = $_SESSION['user'];
 if(isset($_REQUEST['update'])){
  if($_REQUEST['u_password'] == ""){
    echo "fill all fields!";
   }else{
    $u_password = $_REQUEST['u_password'];
    $sql = "UPDATE member SET u_password = '$u_password' WHERE username = '$username'";
      if($conn->query($sql) == TRUE){
        echo "update successful";
      }else{
        echo "enable to update";
   }
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
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Vehicle service center</title>
  </head>
  <body>
   <?php
    include("header_user.php");
   ?>
   
   <div class ="container" style="margin-top: 20px;">
    <div class="row">
      <div class="col-sm-6">

      <form action="" method="POST">
  <div class="form-group ">
    <label for="username">User name</label>
    <input type="text" class="form-control" name="username" id="username" value="<?php echo $username; ?>" readonly>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword">Password</label>
    <input type="password" class="form-control" name="u_password" id="u_password">
  </div>
  <button type="submit" class="btn btn-primary" name="update">Update</button>
</form>
      </div> <!-- end col -->
    </div>  <!-- end row -->
   </div>  <!-- end container -->
 
    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>