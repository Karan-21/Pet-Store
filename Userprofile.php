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

if(!$con)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
	$id=$_SESSION['userid'];
		$q="select *from userinfo  where uid=$id";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		while($r=mysqli_fetch_assoc($result))
		{
			$vna=$r['cusname'];
			$vcontact=$r['contact'];
			$vaddres=$r['address'];
			$vemail=$r['email'];
			$vpass=$r['password'];
			$vconfirm=$r['confirm'];
			
		}
}
if(isset($_REQUEST['update']))
{
	$cusname=$_REQUEST['cusname'];
	$contact=$_REQUEST['contact'];
	$address=$_REQUEST['address'];
	$uname=$_REQUEST['uname'];
	
	
	$pass=$_REQUEST['pass'];
	$confirm=$_REQUEST['confirm'];

	
	$id=$_SESSION['userid'];
	if(!$con)
	{
		echo "Connection error is ".mysqli_connect_error();
	}
	else
	{
		$q="update userinfo set cusname='$cusname',contact=$contact,address='$address',email='$uname',password='$pass',confirm='$confirm' where uid=$id";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<script>alert('Profile Updated successfully!!!!')</script>";
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
<td colspan="3" align="center">
<table cellspacing="10" cellpadding="10">
<tr><td colspan="2" align="center"><h2>MY PROFILE</h2></td></tr>
<tr><td>Customer Name:</td><td><input type="text" name="cusname" id="cusname" value="<?php if(isset($vna)){echo $vna;}?>" required><span id="s4"></span></td></tr>
<tr><td>Contact:</td><td><input type="number" name="contact" id="contact" value="<?php if(isset($vcontact)){echo $vcontact;}?>" required><span id="s4"></span></td></tr>
<tr><td>Address:</td><td><textarea name="address" id="address"><?php if(isset($vaddres)){echo $vaddres;}?></textarea></td></tr>

<tr><td>E-mail Id:</td><td><input type="email" name="uname" id="uname" value="<?php if(isset($vemail)){echo $vemail;}?>" required><span id="s4"></span></td></tr>

<tr><td>Password:</td><td><input type="password" name="pass" id="pass" value="<?php if(isset($vpass)){echo $vpass;}?>" required><span id="s5"></span></td></tr>
<tr><td>Confirm Password:</td><td><input type="password" name="confirm" value="<?php if(isset($vconfirm)){echo $vconfirm;}?>" id="confirm" required><span id="s6"></span></td></tr>

<tr><td colspan="2" align="center"><input type="submit" name="update" id="update" value="Update">
<input type="reset" name="clear" id="clear" value="Reset">
</td>
</tr>

</table>
<br /><br />
<br />
</td>
<td colspan="2" align="center">
<img src="images/profile.jpg" width="300" />
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
