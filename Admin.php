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
<form name="f" method="post" action="" onSubmit="mysubmit();">
<?php

if(isset($_REQUEST['signin']))
{
	$u=$_REQUEST['user'];
	$p=$_REQUEST['pass'];
	if($u=="admin" && $p=="admin")
	{
		header("location:Admincategory.php");
	}
	else
	{
		echo "<script>alert('Invalid Username and Password')</script>";
		
	}
	
}
?>
<table  cellspacing="0" width="100%">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Home.php" class="ss">Home</a></td>
<td class="aa"><a href="Category.php" class="ss">Category</a></td>
<td class="aa"><a href="Food.php" class="ss">Food</a></td>
<td class="aa"><a href="Petclinic.php" class="ss">Pet Clinic</a></td>
<td class="aa"><a href="Admin.php" class="ss">Admin</a></td>
</tr>
<tr>
<td colspan="5">

<img src="images/dog.jpg" width="100%" />
</td>
</tr>
<tr>
<td colspan="5">
<p align="right">
<a href="Home.php"><img src="images/h.png" width="50" />

</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</p>

<table align="center" cellpadding="10" cellspacing="10">
<tr></tr>
<tr><td>Username:</td><td><input type="text" name="user" id="user" onBlur="username();" /><span id="t1"><span></td><td rowspan="3">
<img src="images/admin.png" />
</td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" id="pass" onBlur="ipass();" /><span id="t2"><span></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="signin" id="signin" value="Sign In" />
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
