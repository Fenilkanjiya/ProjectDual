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
			
				<div class="card-body">
					<form action="login_query.php" method="POST">
						<div class="form-group">
							
							<label for="username">Types</label>
							<input type="text" class="form-control " id="email" placeholder="Enter user ID"
								name="Types">
						</div>
						<div class="form-group">
							<label for="pwd">washing:</label>
							<input type="text" class="form-control " id="pwd" placeholder="washing:"
								name="washing:">
                        </div>
                        <div class="form-group">
							<label for="pwd">washing+shop oli:</label>
							<input type="text" class="form-control " id="pwd" placeholder="washing+shop oli:"
								name="washing+shop oli:">
						</div>
						<div class="form-group">
							<label for="pwd">washing+shop oli+air:</label>
							<input type="texy" class="form-control " id="pwd" placeholder="washing+shop oli+air:"
								name="password">
						</div>
						<div class="form-group">
							<label for="pwd">Genral service:</label>
							<input type="=texe" class="form-control " id="pwd" placeholder="Genral service:"
								name="password">
						</div>


						<div class="form-group">
							<button class="btn btn-primary form-control " name="submit">submit</button>
						</div>

					</form>

				</div>
				
			</div>
		</div>


	</div>

</body>

</html>