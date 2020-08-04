<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="Assets/Backend/Layout1/css/bootstrap.min.css">
</head>
<body>
<div class="col-lg-6 col-lg-offset-3" style="margin-top: 40px;">
	<div class="panel panel-primary">
		<div class="panel-heading">Login</div>
		<div class="panel-body">
			<form method="post" action="index.php?area=Backend&controller=Login&action=doLogin">
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2">Email</div>
					<div class="col-lg-10"><input type="email" name="email" class="form-control" required></div>
				</div>
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2">Password</div>
					<div class="col-lg-10"><input type="password" name="password" class="form-control" required></div>
				</div>
				<div class="col-lg-12" style="margin-bottom: 5px;">
					<div class="col-lg-2"></div>
					<div class="col-lg-10"><input type="submit" value="Login" class="btn btn-primary"></div>
				</div>
			</form>
		</div>
	</div>
</div>
</body>
</html>