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
				<h3 class="righth3">Category Manager</h3>
				<table class="righttable">
					<tr>
						<td class="righttabletd">Add Category</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><table class="righttable1">
	                        @if(isset($findrec))
	                        <form action="{{url('edit-category/'.$findrec[0]->id)}}" method="post">
								{{csrf_field()}}
							<tr>
								<td class="td2">Category Name<span class="star">*</span></td>
								<td><input type="text" name="category" value="{{isset($findrec[0]->categoryName) ? $findrec[0]->categoryName:''}}" class="td22"></td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save" class="td11">  <input type="button" value="Cancle" class="td111"></td>
							</tr>
						    </form>
						    @else
							<form action="{{url('add-category')}}" method="post">
								{{csrf_field()}}
							<tr>
								<td class="td2">Category Name<span class="star">*</span></td>
								<td><input type="text" name="category" value="{{isset($findrec[0]->categoryName) ? $findrec[0]->categoryName:''}}" class="td22"></td>
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