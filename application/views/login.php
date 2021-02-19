<!DOCTYPE html>
<html>
<head>
	<title></title>
	<?php include("css.php"); ?>
</head>
<body>
<div class="container">
	<div class="row">
		<div class="col-xl-5">
			<h2>Signup Form..</h2>
			<form id="signup_form" enctype="multipart/form-data">
				<div class="form-group">
					<label>Name : </label>
					<input type="text" name="name" id="name" class="form-control">
				</div>
				<div class="form-group">
					<label>Email : </label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password : </label>
					<input type="text" name="password" id="password" class="form-control">
				</div>
				<div class="form-group">
					<label>Mobile : </label>
					<input type="text" name="mobile" id="mobile" class="form-control">
				</div>
				<div class="form-group">
					<label class="radio-inline">Gender : </label>
					<input type="radio" name="gender" id="gender"  value="Male">Male
					<input type="radio" name="gender" id="gender"  value="Female">Female
				</div>
				<div class="form-group">
					<label>File : </label>
					<input type="file" name="pic" id="pic" class="form-control">
				</div>
				<input type="submit" value="Signup" class="btn btn-success">
			</form>
		</div>
		<div class="col-xl-2"></div>
		<div class="col-xl-5">
			<h2>Login Form..</h2>
			<form id="login_form">
				<div class="form-group">
					<label>Email : </label>
					<input type="text" name="email" id="email" class="form-control">
				</div>
				<div class="form-group">
					<label>Password : </label>
					<input type="text" name="password" id="password" class="form-control">
				</div>
				<input type="submit" value="Login" class="btn btn-info">
			</form>
		</div>
	</div>
</div>
</body>
</html>