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
						<td><span>Change Password</span></td>
					</tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					<tr></tr>
					@if(isset($data))
					<form action="{{url('change-password-submit/'.$data[0]->id)}}" method="post">
						{{csrf_field()}}
					    <tr>
						    <td>Old Password</td>
						    <td><input type="text" name="oldpw"/></td>
					    </tr>
					    <tr>
						    <td>New Password</td>
						    <td><input type="password" name="newpw"/></td>
					    </tr>
						<tr>
						    <td>Confirm Password</td>
						    <td><input type="password" name="confirmpw"/></td>
					    </tr>
					    <tr>
						    <td></td>
						    <td><input type="submit" value="Reset" class="login"/></td>
					    </tr>
					</form>
					@endif
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