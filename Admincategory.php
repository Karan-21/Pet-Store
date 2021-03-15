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
	$breed=$_REQUEST['breed'];
	$life=$_REQUEST['life'];
	$color=$_REQUEST['color'];
	$height=$_REQUEST['height'];
	$weight=$_REQUEST['weight'];
	$highlight=$_REQUEST['highlight'];
	$feeding=$_REQUEST['feeding'];
	$care=$_REQUEST['care'];
	
	
	$photo=$_FILES['photo']['name'];
	move_uploaded_file($_FILES['photo']['tmp_name'],"pet/".$photo);
	
	
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into subcategory(cid,breedname,lifespan,color,height,weight,photo,highlights,feeding,care) values($category,'$breed','$life','$color','$height','$weight','$photo','$highlight','$feeding','$care')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Pet's Breed information Inserted successfully!!!!')</script>";
	}
}

?>
<table  cellspacing="0" width="100%" border="0">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Admincategory.php" class="ss">Category</a></td>
<td class="aa"><a href="Admcustomer.php" class="ss">Customer Info</a></td>
<td class="aa"><a href="Admfood.php" class="ss">Food</a></td>
<td class="aa"><a href="Admproduct.php" class="ss">Product Order  </a></td>
<td class="aa"><a href="Home.php" class="ss">Logout</a></td>
</tr>
<tr>
<td colspan="3" align="center">

<img src="images/pet1.png" />
</td>
<td rowspan="2" colspan="2">
<img src="images/c2.jpg" width="500"/>
</td>
</tr>
<tr>
<td colspan="3">


<table align="center" cellpadding="10" cellspacing="10">
<tr></tr>
<tr><td colspan="2" align="center"><h2>Pet's Breed Information</h2></td></tr>

<tr><td>Pet's Category:</td><td><select name="category" id="category">

<option value="1">Dog</option>
<option value="2">Cat</option>
<option value="3">Fish</option>
<option value="4">Bird</option>

</select>
</td>
</td></tr>

<tr><td>Breed Name:</td><td><input type="text" name="breed" id="breed"  /></td></tr>
<tr><td>Life span:</td><td><input type="text" name="life" id="life"  /></td></tr>
<tr><td>Color:</td><td><input type="text" name="color" id="color"  /></td></tr>
<tr><td>Height:</td><td><input type="text" name="height" id="height"  /></td></tr>
<tr><td>Weight:</td><td><input type="text" name="weight" id="weight"  /></td></tr>
<tr><td>HighLights:</td><td><textarea name="highlight" id="highlight"></textarea></td></tr>
<tr><td>Feeding:</td><td><textarea name="feeding" id="feeding"></textarea></td></tr>
<tr><td>Care:</td><td><textarea name="care" id="care"></textarea></td></tr>
<tr><td>Photo:</td><td><input type="file" id="photo" name="photo" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="insert" id="insert" value="Insert" />
<input type="reset" name="clear" id="clear" value="Clear" /></td></tr>

</table>

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
