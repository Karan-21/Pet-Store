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
.mm
{
	width:200px;
	height:200px;
	transition: transform 2s;
	
}
.mm:hover
{
	transform:rotate(45deg);
}
.hh
{
	color:#9b59b6;
	font-sylte:30px;
	font-family:Jokerman;
	height:50px;
	padding:20px 20px 20px 20px;
}
</style>
</head>

<body>
<?php
include("DB.php");
?>
<?php
if(isset($_REQUEST['register']))
{
	$cusname=$_REQUEST['cusname'];
	$contact=$_REQUEST['contact'];
	$address=$_REQUEST['address'];
	$uname=$_REQUEST['uname'];
	
	
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];

	
	
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="insert into userinfo(cusname,contact,address,email,password,confirm) values('$cusname',$contact,'$address','$uname','$pass','$confirm')";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Registered successfully!!!!')</script>";
	}
}



?>
<form name="f" method="post" action="" >

<table  cellspacing="0" width="100%" border="0">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Home.php" class="ss">Home</a></td>
<td class="aa"><a href="Category.php" class="ss">Category</a></td>
<td class="aa"><a href="Food.php" class="ss">Food</a></td>
<td class="aa"><a href="Petclinic.php" class="ss">Pet Clinic</a></td>
<td class="aa"><a href="Admin.php" class="ss">Admin</a></td>
</tr>

<tr>
<td colspan="3" align="center">
<marquee>

<div class="hh">
Welcome To Our Pet Store!!!
</div>
</marquee>
<table cellspacing="10" cellpadding="10">
<tr><td colspan="2" align="center"><h2>USER REGISTRATION</h2></td></tr>
<tr><td>Customer Name:</td><td><input type="text" name="cusname" id="cusname" required><span id="s4"></span></td></tr>
<tr><td>Contact:</td><td><input type="number" name="contact" id="contact" required><span id="s4"></span></td></tr>
<tr><td>Address:</td><td><textarea name="address" id="address"></textarea></td></tr>

<tr><td>E-mail Id:</td><td><input type="email" name="uname" id="uname" required><span id="s4"></span></td></tr>

<tr><td>Password:</td><td><input type="password" name="pass" id="pass" required><span id="s5"></span></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="confirm" id="confirm" required><span id="s6"></span></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="register" id="register" value="Register">
<input type="reset" name="clear" id="clear" value="Reset">
</td>
</tr>
<tr><td colspan="2" align="center"><a href="Food.php">Login Here</a></td></tr>
</table>

</td>
<td  colspan="2">

<img src="images/user.png"/>
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
</body>
</html>
