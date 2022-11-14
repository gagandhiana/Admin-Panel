<!DOCTYPE html>
<html>
<head>
	<title>Third</title>
	<link rel="stylesheet" type="text/css" href="{{asset('css\style.css')}}">
</head>
<body>
	<?php include('header.php') ?>
	<div class="innercontainer">
	    <!--  inner container starts here  -->
		<div class="innercontainer1">
			<div class="right">
				<h3 class="heading3">Product Manager</h3>
				<hr size="1" class="underh3">
				<h5 class="heading5">This section displays the list of Pages</h5>
				<div class="upper"><span class="upperspan1">Click here
				</span> to add <span class="upperspan1"><a href="add_pro">New Product</a></span></div>
				<table border="1" class="middle">
					<form action="{{url('/search-product')}}" method="post">
						{{csrf_field()}}
					<tr>
						<td class="middle1">Search</td>
					
					</tr>
					<tr>
						<td class="middle2">
							Search By Product Name :
							<input type="text" name="pName" class="minput1">
						</td>
					</tr>
					<tr>
						<td class="middle2">
							Search By Parent Page :
							<select class="select3"><option>< Select Option ></option></select>
							<input type="submit" name="submit" value="Search" class="minput2">
						</td>
					</tr>
				    </form>
				</table>

				<h5 class="middleh5">Page 1 of 2, showing 10 records out of 13 total, starting on record 1, ending on 10</h5>

				<table border="1" class="lower">
					<tr class="lowertheading">
						<th>Sr. No.</th>
						<!-- <th>Category Name</th> -->
						<th>Category Name</th>
						<th>Product Name</th>
						<th>Product Description</th>
						<th>Product Price</th>
						<th>Product Image</th>
						<th>Edit</th>
						<th>Delete</th>
					</tr>
					@foreach($data as $row)
					<tr>
						<td>{{$row->id}}</td>
						<td>{{$row->cname}}</td>
			            <td>{{$row->productName}}</td>
			            <td>{{$row->productDescription}}</td>
			            <td>{{$row->productPrice}}</td>
			            <td><img src="{{url('product_images/'.$row->productImage)}}"></td>
			            <td><a href="{{'edit-pro/'.$row->id}}">Edit</a></td>
			            <td><a href="{{'delete-pro/'.$row->id}}">Delete</a></td>
					</tr>
					@endforeach
					<tr>
			            <td colspan="7">{{$data->links('pagi')}}</td>
		            </tr>
				</table>
			</div>
			<?php include("menu.php") ?>
		</div>
		<!--  innercontainer1 ends here  -->
	</div>
	<!--  innerconatiner ends here  -->
	<?php include("footer.php") ?>
	<style type="text/css">
		.pagination{
			list-style: none;
			margin-top: 5px;
			margin-left: 0px;
		}
		.pagination li{
			display: inline;
			padding: 5px;
			border: solid 1px #000;
		}
	</style>

</body>
</html>