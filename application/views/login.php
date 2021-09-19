<?php defined('BASEPATH') OR exit('No direct script access allowed');?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Simple login Panel</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>bootstrap/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
		<h1 class="text-center">Simple Login Form</h1>
		<hr>	
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
			<form action="<?php base_url() ?>index.php/User/user_login" method="POST" >
				<div class="form-group">
				<input type="email" name="email"  class="form-control" placeholder="Email" required><br>
				<input type="password" name="pass" class="form-control" placeholder="Password" required><br>
				<input type="submit" name="submit" class="btn btn-lg btn-primary" value="Login">
				</div>
			</form>
			</div>
		</div>
	</div>	
</body>
</html>