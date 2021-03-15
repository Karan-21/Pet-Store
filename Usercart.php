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
session_start();

?>
<?php
if(isset($_REQUEST['pid']))
{
$id=$_REQUEST['pid'];


if(!$con)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
	
		$q="select *from fooddata where fid=$id";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		while($r=mysqli_fetch_assoc($result))
		{
			$pid=$r['fid'];
			$vfoodname=$r['foodname'];
			$vprice=$r['price'];
			$vweight=$r['weight'];
			$vexpirydate=$r['expirydate'];
			$vingredients=$r['ingredients'];
			$photo=$r['photo'];
			
		}
}

}
?>
<form name="f" method="post" action="" onSubmit="mysubmit();">

<table  cellspacing="0" width="100%">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Userprofile.php" class="ss">My Profile</a></td>
<td class="aa"><a href="Usershopping.php" class="ss">Shopping</a></td>
<td class="aa"><a href="Userorderinfo.php" class="ss">Order Details</a></td>
<td class="aa"><a href="Petclinic.php" class="ss">Pet Clinic</a></td>
<td class="aa"><a href="Home.php" class="ss">Logout</a></td>

</tr>
<tr>
<td colspan="5">
<p align="right">
<?php
if(isset($_SESSION['user']))
{
	echo "Welcome ".$_SESSION['user'];
}
?>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>

</td>
</tr>
<tr>
<td colspan="5" align="center">
<p align="center"><h1>Your Product Details</h1></p>
<table align="center" cellspacing="10" cellpadding="10">
<tr><td rowspan="7"><img width="350" height="350" src="food/<?php echo $photo;?>" /></td><td>Product Name: </td><td><?php echo $vfoodname;?></td></tr>
<tr><td>Price: </td><td>Rs.<?php echo $vprice;?></td></tr>
<tr><td>Weight: </td><td><?php echo $vweight;?></td></tr>
<tr><td>Expiry Date: </td><td><?php echo $vexpirydate;?></td></tr>
<tr><td>Ingredients: </td><td><?php echo $vingredients;?></td></tr>
<tr><td>Needed Quantity: </td><td><input type="text" name="quantity" id="quantity" /></td></tr>
<tr><td><input type="submit" name="shop" id="shop" value="Back To Shop" /></td><td>
<input type="submit" id="b1" name="b1" value="Proceed" /></a></tr>
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
<?php
if(isset($_REQUEST['shop']))
{

	$cid=$_SESSION['userid'];
	$da=date("y/m/d/");
	$qn=$_REQUEST['quantity'];
	$amt=$vprice*$qn;
	$na=$_SESSION['user'];
	if(!$con)
	{
		echo "the connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="insert into shopping values($pid,'$vfoodname',$vprice,$qn,$amt,$cid,'$da','$na')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		header("location:Usershopping.php");
	}
}

?>

<?php
if(isset($_REQUEST['b1']))
{

	$cid=$_SESSION['userid'];
	$da=date("y/m/d/");
	$qn=$_REQUEST['quantity'];
	$amt=$vprice*$qn;
	$na=$_SESSION['user'];
	if(!$con)
	{
		echo "the connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="insert into shopping values($pid,'$vfoodname',$vprice,$qn,$amt,$cid,'$da','$na')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		header("location:Userproceed.php");
	}
}

?>

</body>
</html>
