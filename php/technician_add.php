<?php
include('header.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Bootstrap Example</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
     body {
    background-image: url(../img/background.jpg);
    background-repeat: no-repeat;
    height: 500px;
    background-size: cover;
    background-attachment: fixed;
}
    </style>
   
</head>

<body>

<div class="container " style="margin-top: 6rem!important;">
    <div class="col-md-6" style="margin:0 auto">
			<div class="card shadow">
				<div class="card-header"> <b>Add New Technician </b></div>
				<div class="card-body">
                    <form action="technician_add_query.php" method="POST">
                        <div class="form-group">
                        <label for="empName">Name</label>
                        <input type="text" class="form-control" id="empName" name="t_name">
                        </div>
                        <div class="form-group">
                        <label for="empCity">City</label>
                        <input type="text" class="form-control" id="empCity" name="t_city">
                        </div>
                        <div class="form-group">
                        <label for="empMobile">Mobile</label>
                        <input type="text" class="form-control" id="empMobile" name="t_mobile" >
                        </div>
                        <div class="form-group">
                        <label for="empEmail">Email</label>
                        <input type="email" class="form-control" id="empEmail" name="t_email">
                        </div>
                        <div class="text-center">
                        <button type="submit" class="btn btn-danger" id="empsubmit" name="t_submit">Submit</button>
                        </div>
                      
                    </form>
                </div>
            </div>
    </div>
</div>

</body>

</html>