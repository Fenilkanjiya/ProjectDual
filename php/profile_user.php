<?php
require_once 'conn.php';
 
session_start();
 if($_SESSION['user']){
  $username = $_SESSION['user'];
 }else{
   echo "please login";
 }
 
 $username = $_SESSION['user'];

  
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>profile</title>
  </head>
  <body>
  
  <div class="container mt-5">
  <div class="col-sm-6"> 
  <div class="form-group">
  <form>
  <div class="form-group">
    <label for="mem_id">Member ID</label>
    <input type="text" class="form-control" id="mem_id" name="mem_id" placeholder="mem_id" readonly value="<?php echo "$mem_id"; ?>">
  </div>
    <label for="username">User name</label>
    <input type="text" class="form-control" id="username" name="username " placeholder="username" value="<?php echo "$username"?>">
  </div>
  <div class="form-group">
    <label for="firstname">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="firstname">
  </div>
  <div class="form-group">
    <label for="lastname">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="lastname">
  </div>


 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
  </div>
  </div>
  

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>