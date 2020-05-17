<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-lg-6">
				
				<h2>Login Form</h2>
				
				<form action="validation.php" method="post">
					<div class="form-group">
					    <label> Username </label>
					    <input type="text" name="user" class="form-control" autocomplete="off">
					</div>

					<div class="form-group ">
					    <label> Password </label>
					    <input type="Password" name="password" class="form-control" autocomplete="off">
					</div>
					<button type="submit" class="btn btn-primary">Login</button>
				</form>
				
			</div>

			<div class="col-lg-6">
				
				<h2>Signup Form</h2>
				
				<form action="Registration.php" method="post">
					<div class="form-group">
					    <label> Username </label>
					    <input type="text" name="user" class="form-control" autocomplete="off">
					</div>

					<div class="form-group ">
					    <label> Password </label>
					    <input type="Password" name="password" class="form-control" autocomplete="off">
					</div>
					<button type="submit" class="btn btn-primary">Signin</button>
				</form>
				
			</div>
			
		</div>
		

	</div>

</body>
</html>