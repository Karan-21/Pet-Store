<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style>
.demo
{
	background-image:url(images/bg-search-form.gif);
	background-size:100%100%;
}
.ss
{

	 text-decoration:none;
	 text-align:center;
	 color:black;
	  
}
.ss:hover
{
	color:white;
	
}
.aa
{
	border-right:2px solid white;
	text-align:center;
	width:20%;
	 
}
div
{
	text-align:justify;
	line-height:25px;
}
</style>
</head>

<body>
<?php
include("DB.php");

?>
<form name="f" method="post" action="" enctype="multipart/form-data">
<?php
if(isset($_REQUEST['insert']))
{
	$category=$_REQUEST['category'];
	$food=$_REQUEST['food'];
	$price=$_REQUEST['price'];
	$weight=$_REQUEST['weight'];
	$qty=$_REQUEST['qty'];
	$ingred=$_REQUEST['ingred'];

	$photo=$_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'],"food/".$photo);
	
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into fooddata(category,foodname,price,weight,quantity,ingredients,photo) values($category,'$food','$price','$weight','$qty','$ingred','$photo')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Food details Inserted successfully!!!!')</script>";
	}
}

?>
<table  cellspacing="0" width="100%">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Admincategory.php" class="ss">Category</a></td>
<td class="aa"><a href="Admcustomer.php" class="ss">Customer Info</a></td>
<td class="aa"><a href="Admfood.php" class="ss">Food</a></td>
<td class="aa"><a href="Admproduct.php" class="ss">Product Order  </a></td>
<td class="aa"><a href="Home.php" class="ss">Logout</a></td>
</tr>
<tr>

<td colspan="3" align="center">

<img src="images/Dog-eating.jpg" height="350"  />
</td>
<td rowspan="2" colspan="2">
<img src="images/dfood.png" />
<br /><br />
<img src="images/bfood.png" />

</td>
</tr>
<tr>
<td colspan="3">


<table align="center" cellpadding="10" cellspacing="10">
<tr></tr>
<tr><td colspan="2" align="center"><h2>Pet's Food Information</h2></td></tr>

<tr><td>Pet's Category:</td><td><select name="category" id="category">

<option value="1">Dog</option>
<option value="2">Cat</option>
<option value="3">Fish</option>
<option value="4">Bird</option>

</select>
</td>
</td></tr>

<tr><td>Food Name:</td><td><input type="text" name="food" id="food"  /></td></tr>
<tr><td>Price:</td><td><input type="text" name="price" id="price"  /></td></tr>
<tr><td>Weight:</td><td><input type="text" name="weight" id="weight"  /></td></tr>
<tr><td>Quantity:</td><td><input type="text" name="qty" id="qty"  /></td></tr>
<tr><td>Ingredients:</td><td><input type="text" name="ingred" id="ingred"  /></td></tr>
<tr><td>Photo:</td><td><input type="file" id="photo" name="photo" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert" />

<input type="reset" name="clear" id="clear" value="Clear" /></td></tr>
<br />
</table>
<br /><br /><br /><br />
</td>
</tr>
<tr bgcolor="#f39c12" height="50">
<td colspan="5" align="center">
Copy right @ 2020 Pet Store

</td>
</tr>

</table>
</td>
</tr>
</table>
</form>
</body>
</html>
