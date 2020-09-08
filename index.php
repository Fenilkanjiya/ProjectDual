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
</head>

<body>

	<div class="container mt-5">


		<div class="col-md-6" style="margin:0 auto">
			<div class="card shadow">
				<div class="card-header">Get Stunning Experince With <b>Wobble </b></div>
				<div class="card-body">
					<form action="login_query.php" method="POST">
						<div class="form-group">
							<label for="username">Username:</label>
							<input type="text" class="form-control " id="email" placeholder="Enter user ID"
								name="username">
						</div>
						<div class="form-group">
							<label for="pwd">Password:</label>
							<input type="password" class="form-control " id="pwd" placeholder="Enter password"
								name="password">
						</div>

						<div class="form-group">
							<button class="btn btn-primary form-control " name="login">Login</button>
						</div>

					</form>

				</div>
				<div class="card-footer">
					<a href="registration.php" class="float-right btn btn-primary">SignUp</a>
				</div>
			</div>
		</div>


	</div>

</body>

</html>