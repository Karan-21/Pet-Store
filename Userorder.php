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
session_start();

?>

<form name="f" method="post" action="" onSubmit="mysubmit();">

<table  cellspacing="0" width="100%" border="0">
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
<td colspan="2">
<br /><br />

<img src="images/ccc.png"   />
<br /><br />
<br /><br />
<br /><br />

</td>
<td colspan="3"  >

<p><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Shipping  Details</h1></p>

<table cellspacing="10" cellpadding="10">
<tr><td>Shipping Address:</td><td><textarea name="add" id="add"></textarea></td></tr>
<tr><td>Contact No:</td><td><input type="text" name="contact" id="contact" /></td></tr>
<tr><td>E-Mail:</td><td><input type="text" name="mail" id="mail" /></td></tr>
<tr><td colspan="2" align="center"><input type="submit" id="submit" name="submit" vlaue="Submit" />
<input type="reset" name="clear" id="clear"  value="Clear" /></td></tr>

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

<?php

if(isset($_REQUEST['submit']))
{

$address=$_REQUEST['add'];
$contact=$_REQUEST['contact'];
$email=$_REQUEST['mail'];

$cid=$_SESSION['userid'];
$na=$_SESSION['user'];
$da=date("y/m/d/");
$at=$_REQUEST['amount'];

if(!$con)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
	$q="insert into orderinfo(orderdate,amount,cid,cname,shipaddress,contact,mail) values('$da',$at,$cid,'$na','$address',$contact,'$email')";
	$result=mysqli_query($con,$q);
	echo mysqli_error($con);
	echo "<script>alert('Order Successfully')</script>";
	echo "<script>alert('Thanks for Shopping... Click Order Details..')</script>";
	
	//header("location:Home.php");			
}

}
?>

</form>

</body>
</html>

