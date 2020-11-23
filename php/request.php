<?php
include('header.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    
    <link rel="stylesheet"  href="../css/all.css" >
    <style>
      body {
    background-image: url(../img/background.jpg);
    background-repeat: no-repeat;
    height: 500px;
    background-size: cover;
    background-attachment: fixed;
      }
  
    </style>
    
    
    <title>Vehicle service center</title>
  </head>
  <body>
    <div class="row">
      <div class="col-sm-4 " style="margin-top: 5rem!important;">
        <div class="card mt-5 mx-5 small-card">
        <?php
          
           $conn = mysqli_connect("localhost","root","","service_project") or die("fail");
     
           $sql = "SELECT * FROM inputuser";
           $result = mysqli_query($conn, $sql) or die("query unsucessful");
     
           if(mysqli_num_rows($result) > 0) {
      
            while($row = mysqli_fetch_assoc($result)) {
        ?>
          <div class="card-header"> Member ID : <?php echo $row['mem_id']; ?> </div>
            <div class="card-body">
               <p class="card-text"> Category : <?php echo $row['category']; ?></p>  
               <p class="card-text"> Model : <?php echo $row['v_model']; ?></p>
               <p class="card-text"> Discription : <?php echo $row['discription']; ?></p>

                  <div class="float-right">
                  <?php
                   echo '<form action = "" method= "POST">';
                   echo '<input type="hidden" name="id" value='.$row["mem_id"].'>';
                   echo '<input type="hidden" name="name" value='.$row["user_name"].'>';
                   echo '<input type="hidden" name="category" value='.$row["category"].'>';
                   echo '<input type="hidden" name="v_model" value='.$row["v_model"].'>';
                   echo '<input type="hidden" name="v_brand" value='.$row["v_brand"].'>';
                   echo '<input type="hidden" name="v_ragi_number" value='.$row["v_ragi_number"].'>';
                   echo '<input type="hidden" name="discription" value='.$row["discription"].'>';
                   echo '<input type="hidden" name="service_date" value='.$row["service_date"].'>';
                   echo '<input type="hidden" name="service_time" value='.$row["service_time"].'>';
                   echo '<input type="hidden" name="pickup_address" value='.$row["pickup_address"].'>';
                   echo '<input type="submit" class="btn btn-success" value="View" name="view">'; 
                   echo '</form>';
                  ?>
                    
                 </div>
            </div>
           <?php }  ?>          
          </div>
            <?php } ?>  
        </div>
       
  
   <div class="col-sm-5 mt-5 offset-1" style="margin-top: 6rem!important;">
   <div class="card shadow">
   <div class="card-header"><h3 style="text-align: center;">welcome to service center</h3></div>
   <div class="card-body">
   <div class="container  mt-3">
   <form action="admin_main_history.php" method="POST">	
         <h4>Assign work...</h4>
         
         <div class="form-group">
           <label>Request Id</label>
           <input type="text" class="form-control" name="a_request_id" value="<?php if(isset($_REQUEST['id'])) echo $_REQUEST['id']; ?> "/>
         </div>
         <div class="form-group">
           <label for="firstname">Name</label>
           <input type="text" class="form-control" name="a_name" value="<?php if(isset($_REQUEST['name'])) echo $_REQUEST['name']; ?> "/>
         </div>
         <div class="form-group">
           <label>Category</label>
           <input type="text" class="form-control" name="a_category" value="<?php if(isset($_REQUEST['category'])) echo $_REQUEST['category']; ?> "/>
         </div>
         <div class="form-group">
           <label>Vehicle Model</label>
           <input type="text" class="form-control" name="a_v_model" value="<?php if(isset($_REQUEST['v_model'])) echo $_REQUEST['v_model']; ?> "/>
         </div>
         <div class="form-group">
           <label>Vehical Brand</label>
           <input type="text" class="form-control" name="a_v_brand" value="<?php if(isset($_REQUEST['v_brand'])) echo $_REQUEST['v_brand']; ?> "/>
         </div>
         <div class="form-group">
           <label>Ragistration number</label>
           <input type="text" class="form-control" name="a_v_ragi_number" value="<?php if(isset($_REQUEST['v_ragi_number'])) echo $_REQUEST['v_ragi_number']; ?> "/>
         </div>
                
                 <div class="form-group">
           <label>Date</label>
           <input type="text" class="form-control" name="a_date" value="<?php if(isset($_REQUEST['service_date'])) echo $_REQUEST['service_date']; ?> "/>
         </div>
                 <div class="form-group">
           <label>Time</label>
           <input type="text" class="form-control" name="a_time" value="<?php if(isset($_REQUEST['service_time'])) echo $_REQUEST['service_time']; ?> "/>
         </div>
 
                <br>
                 <div class="form-group">
                     <label for="inputAddress">Address</label>
                     <input type="text" class="form-control" name="a_address" value="<?php if(isset($_REQUEST['pickup_address'])) echo $_REQUEST['pickup_address']; ?> ">
                 </div>
 
                 <div class="form-group">
           <label>Discription</label>
           <input type="text " class="form-control" name="a_discription" value="<?php if(isset($_REQUEST['discription'])) echo $_REQUEST['discription']; ?> "/>
         </div>
         <br/>
         <div class="form-group">
                     <label for="inputAddress">Price</label>
                     <input type="text" class="form-control" name="a_price">
                 </div>
         <div class="form-group">
           <button class="btn btn-primary form-control" name="submit">submit</button>
         </div>
       </form>
     </div>
      </div>
 </div>    
  <?php
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