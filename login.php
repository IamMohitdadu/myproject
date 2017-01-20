<!--
  file-name: login.php
  used-for: form for user and admin login
  created-by: Mohit Dadu
  description: it is the user login page.
  date:18/01/2017
-->

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"/>
    <title>LOGIN PAGE</title>
    <link rel="stylesheet" type="text/css" href="asset/css/style.css"/>
    <link rel="stylesheet" type="text/css" href="asset/vendors/css/bootstrap.css" /> 
  </head>
  <body>
		<nav class="navbar navbar-inverse">
			<div class="row">
				<div class="container-fluid">
					<div class="collapse navbar-collapse" id="myNavbar">
						<ul class="nav navbar-nav">
							<li class="active"><a href="index.php"><span class="glyphicon glyphicon-home"></span>&nbsp HOME</a></li>
							<li><a href="register.php"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Registration </a></li>
							<li><a href="login.php" style="color:green"><span class="glyphicon glyphicon-log-in"></span>&nbsp;Login</a></li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
		<form action="process.php" class="form-horizontal container" name="LoginForm" method="post" id="form">
			<div class="container-fluid form-group">
				<div class="col-sm-10">
					<label class="control-label col-sm-4">User name:</label>
					<div class="col-sm-6">
						<input type="text" id="email" name="email" class="form-control" placeholder="Email address"/>
					</div>
					<br>
					<label class="control-label col-sm-4">Password:</label>
					<div class="col-sm-6">
						<input type="password" id="password" name="password" class="form-control" placeholder="Must be more than 6 characters"/>
					</div>
					<label class="control-label col-sm-4">Login As:</label>
					<div class = "col-sm-6">
						<select id="user-type" class="from-control" name="userType">
							<option value="Admin">Admin</option>
							<option value="User">User</option> 
						</select>
					</div>
				</div>
			</div>
			<div class="form-style">
				<a href=""><center>forget password</center></a>
			</div>
			<div class="form-style">
				<center><input type='submit' class="btn btn-success" name='btn-login' value='Login'></center>
			</div>      
    </form>
  </body>
</html>
