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
				<h3 class="righth3">Product Manager</h3>
				<table class="righttable">
					<tr>
						<td class="righttabletd">Add Product</td>
					</tr>
					<tr>
						<td></td>
					</tr>
					<tr>
						<td><table class="righttable1">
							@if(isset($findrec))
							<form action="{{url('edit-product/'.$findrec[0]->id)}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
							<tr>
								<td class="td2">Select Category<span class="star">*</span></td>
								<td><select class="td22" name="cname"><option>Select Category</option>
									@foreach($data as $row)
									<option value="{{$row->cname}}" name="cname">{{$row->cname}}</option>
									@endforeach
								</select></td>
							</tr>
							<tr>
								<td class="td3">Product Name</td>
								<td><input type="text" name="pro_name" value="{{isset($findrec[0]->productName) ? $findrec[0]->productName:''}}" class="td33"></td>
							</tr>
							<tr>
								<td></td>
								<td><img src="images\2.jpg" class="tdimg6"></td>
							</tr>
							<tr>
								<td class="td7">Product Description</td>
								<td><input type="text" name="pro_des" value="{{isset($findrec[0]->pageDescription) ? $findrec[0]->pageDescription:''}}" class="td77"></td>
							</tr>
							<tr>
								<td class="td3">Product Price<span class="star">*</span></td>
								<td><input type="text" name="pro_price" value="{{isset($findrec[0]->pagePrice) ? $findrec[0]->pagePrice:''}}" class="td33"></td>
							</tr>
							<tr>
								<td class="td8">Product Image</td>
								<td><input type="file" name="pimage" value="{{isset($findrec[0]->pageImage) ? $findrec[0]->pageImage:''}}" value="Browse"/>(Type: .jpeg, .jpg, .gif, .png)</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save" class="td11">  <input type="submit" value="Cancle" class="td111"></td>
							</tr>
							</form>
							@else
							<form action="{{url('add-product')}}" method="post" enctype="multipart/form-data">
								{{csrf_field()}}
							<tr>
								<td class="td2">Select Category<span class="star">*</span></td>
								<td><select class="td22" name="cname"><option>Select Category</option>
									@foreach($data as $row)
									<option value="{{$row->cname}}" name="cname">{{$row->cname}}</option>
									@endforeach
								</select></td>
							</tr>
							<tr>
								<td class="td3">Product Name</td>
								<td><input type="text" name="pro_name" class="td33"></td>
							</tr>
							<tr>
								<td></td>
								<td><img src="images\2.jpg" class="tdimg6"></td>
							</tr>
							<tr>
								<td class="td7">Product Description</td>
								<td><input type="text" name="pro_des" class="td77"></td>
							</tr>
							<tr>
								<td class="td3">Product Price<span class="star">*</span></td>
								<td><input type="text" name="pro_price" class="td33"></td>
							</tr>
							<tr>
								<td class="td8">Product Image</td>
								<td><input type="file" name="pimage" value="Browse"/>(Type: .jpeg, .jpg, .gif, .png)</td>
							</tr>
							<tr>
								<td></td>
								<td><input type="submit" name="save" value="Save" class="td11">  <input type="submit" value="Cancle" class="td111"></td>
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