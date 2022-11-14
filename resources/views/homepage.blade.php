@if(session()->has('user_session'))
<!DOCTYPE html>
<html>
<head>
	<title>Second</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
</head>
<body>
	<?php include('header.php') ?>
	<div class="innercontainer">
	    <!--  inner container starts here  -->
		<div class="innercontainer1">
			<div class="right">
				<h3 class="righth3">Page Manager</h3>
				<table class="righttable">
					<tr>
						<td class="righttabletd">Add Page</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><table class="righttable1">
	                        @if(isset($findrec))
							<form action="{{url('edit-form/'.$findrec[0]->id)}}" method="post">
								{{csrf_field()}}
							<tr>
								<td class="td2">Name<span class="star">*</span></td>
								<td><input type="text" name="p_name" value="{{isset($findrec[0]->pageName) ? $findrec[0]->pageName:''}}" class="td22"></td>
							</tr>
							<tr>
								<td></td>
								<td><img src="images\2.jpg" class="tdimg6"></td>
							</tr>
							<tr>
								<td class="td7">Content</td>
								<td><input type="text" name="con_tent" value="{{isset($findrec[0]->content) ? $findrec[0]->content:''}}" class="td77"></td>
							</tr>
							<tr>
								<td class="td10">status</td>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save" class="td11">  <input type="button" value="Cancle" class="td111"></td>
							</tr>
						    </form>
						    @else
						    <form action="{{url('page-det')}}" method="post">
								{{csrf_field()}}
							<tr>
								<td class="td1">Parent Page</td>
								<td class="td112"><select class="select2"><option>ROOT</option></select></td>
							</tr>
							<tr>
								<td class="td2">Name<span class="star">*</span></td>
								<td><input type="text" name="p_name" value="{{isset($findrec[0]->pageName) ? $findrec[0]->pageName:''}}" class="td22"></td>
							</tr>
							<tr>
								<td></td>
								<td><img src="images\2.jpg" class="tdimg6"></td>
							</tr>
							<tr>
								<td class="td7">Content</td>
								<td><input type="text" name="con_tent" value="{{isset($findrec[0]->content) ? $findrec[0]->content:''}}" class="td77"></td>
							</tr>
							<tr>
								<td class="td10">status</td>
								<td><input type="checkbox"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save" class="td11">  <input type="button" value="Cancle" class="td111"></td>
							</tr>
						    </form>
						    @endif
						</table></td>
					</tr>
				</table>
			</div>
			<?php include("menu.php") ?>
		</div>
		<!--  innercontainer1 ends here  -->
	</div>
	<!--  innerconatiner ends here  -->
	<?php include("footer.php") ?>

</body>
</html>
@else
<script>window.location="{{url('login-page')}}"</script>
@endif