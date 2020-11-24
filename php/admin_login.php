<!DOCTYPE html>
<html lang="en">

<head>
	<title>Vehicle service center</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<<style>
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
  <!-- <img src="../img/background.jpg" alt="" style= width:100%;> -->

	<div class="container mt-5">


		<div class="col-md-6" style="margin:0 auto">
			<div class="card shadow">
				<div class="card-header" style="text-align: center;"> <b>Admin login </b></div>
				<div class="card-body">
				<form action="adminlogin_query.php" method="POST">
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" class="form-control " name="admin_name" placeholder="Enter user ID"
								name="ausername">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control " name="admin_password" placeholder="Enter password"
								name="apassword">
						</div>

						<div class="form-group">
							<button class="btn btn-primary form-control " name="login">Login</button>
						</div>

					</form>

				</div>
				
			</div>
		</div>


	</div>

</body>

</html>