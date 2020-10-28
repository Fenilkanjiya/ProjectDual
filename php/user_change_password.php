<?php
include("header_user.php");
include("Conn.php");
session_start();
if($_SESSION['is_login']){
 $rEmail = $_SESSION['username'];
} else {
 echo "<script> location.href='RequesterLogin.php'; </script>";
}

 $username = $_SESSION['username'];
 if(isset($_REQUEST['u_password'])){
  if(($_REQUEST['u_Password'] == "")){
   // msg displayed if required field missing
   $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> Fill All Fileds </div>';
  } else {
    $sql = "SELECT * FROM member WHERE username='$username'";
    $result = $conn->query($sql);
    if($result->num_rows == 1){
     $u_password = $_REQUEST['u_password'];
     $sql = "UPDATE member SET u_password = '$u_password' WHERE username = '$username'";
      if($conn->query($sql) == TRUE){
       // below msg display on form submit success
       $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
      } else {
       // below msg display on form submit failed
       $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
      }
    }
   }
}

?>
<div class="col-sm-9 col-md-10">
  <div class="row">
    <div class="col-sm-6">
      <form class="mt-5 mx-5" method="POST">
        <div class="form-group">
          <label for="usernmae">user name</label>
          <input type="text" class="form-control" id="username" value=" <?php echo $username ?>" readonly>
        </div>
        <div class="form-group">
          <label for="u_password">New Password</label>
          <input type="password" class="form-control" id="u_password" placeholder="New Password" name="u_password">
        </div>
        <button type="submit" class="btn btn-danger mr-4 mt-4" name="passupdate">Update</button>
        <button type="reset" class="btn btn-secondary mt-4">Reset</button>
        <?php if(isset($passmsg)) {echo $passmsg; } ?>
      </form>

    </div>

  </div>
</div>
</div>
</div>

<?php
include("footer.php"); 
?>