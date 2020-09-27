<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
include "home.php";
?>

<div class="container mt-5">
   
  <div class="col-md-6" style="margin:0 auto">
  <div class="card shadow">
  <div class="card-header"><h3>welcome to service center</h3></div>
  <div class="card-body">
  <div class="container  mt-3">
  <form action="user_conn.php" method="POST">	
				<h4>Input here....</h4>
				
				<div class="form-group">
					<label for="firstname">Name</label>
					<input type="text" class="form-control" name="user_name" />
				</div>
				<div class="form-group">
                 <label for="inputState">Category</label>
                    <select id="inputState" class="form-control" name="category">
                         <option selected>Two wheeler</option>
                         <option selected>Four wheeler</option>
                         <option selected>Six wheeler</option>
                    </select>
                </div>
				<div class="form-group">
					<label>Vehicle Model</label>
					<input type="text" class="form-control" name="v_model" />
				</div>
				<div class="form-group">
					<label>Vehical Brand</label>
					<input type="text" class="form-control" name="v_brand" />
				</div>
				<div class="form-group">
					<label>Ragistration number</label>
					<input type="text" class="form-control" name="v_ragi_number" />
				</div>
               
                <div class="form-group">
					<label>Date</label>
					<input type="Date" class="form-control" name="service_date" />
				</div>
                <div class="form-group">
					<label>Time</label>
					<input type="Time" class="form-control" name="service_time" />
				</div>

                <div>
                      Dilevry Type :   
              <input type="radio" name="v_pickup" <?php if (isset($Dilevry_Type) && $gender=="Pickup") echo "checked";?> value="Picup">Pickup
            <input type="radio" name="v_drop" <?php if (isset($Dilevry_Type) && $gender=="Drop") echo "checked";?> value="Drop">Drop

          </div><br>
                <div class="form-group">
                    <label for="inputAddress">Address</label>
                    <input type="text" class="form-control" name="pickup_address" placeholder="Address">
                </div>

                <div class="form-group">
					<label>Discription</label>
					<input type="text" class="form-control" name="discription" />
				</div>
				<br/>
				<div class="form-group">
					<button class="btn btn-primary form-control" name="register">submit</button>
				</div>
				
			</form>
		</div>

     </div>
 

</div>




<!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>    