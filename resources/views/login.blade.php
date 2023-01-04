<!DOCTYPE html>
<html>
<head>
	<title>First</title>
	<link rel="stylesheet" type="text/css" href="css\style.css">
</head>
<body>
	<?php include('header.php') ?>
	<div class="innercontainer">
	    <!--  inner container starts here  -->
		<div class="innercontainer1">
			<!--  login table starts here  -->
			<div class="logintable">
				<table class="table">
					<tr>
						<td></td>
						<td><span>Login</span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<form action="{{url('login-details-submit')}}" method="post">
						{{csrf_field()}}
					    <tr>
						    <td>Username</td>
						    <td><input type="text" name="user"/></td>
					    </tr>
					    <tr>
						    <td>Password</td>
						    <td><input type="password" name="pw"/></td>
					    </tr>
					    <tr>
						    <td></td>
						    <td><input type="submit" value="Login" class="login"/></td>
					    </tr>
					</form>
				</table>
			</div>
			<!--  login table ends here  -->
		</div>
		<!--  innercontainer1 ends here  -->
	</div>
	<!--  innerconatiner ends here  -->
	<?php include("footer.php") ?>

</body>
</html>