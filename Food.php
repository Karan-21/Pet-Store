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
session_start();

?>

<?php

if(isset($_REQUEST['signin']))
{
	
	$uname=$_REQUEST['user'];
	$pass=$_REQUEST['pass'];
	
	
	if(!$con)
	{
		echo "the connection error is ".mysqli_connect_error();
		
	}
	else
	{
		$q="select *from userinfo where email='$uname' and password='$pass'";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		while($r=mysqli_fetch_assoc($result))
		{
			$id=$r['uid'];
			$na=$r['cusname'];
			
		}
		if(isset($na))
		{
			$_SESSION['user']=$na;
			$_SESSION['userid']=$id;

			header("location:Userprofile.php");
		}
		else
		{
			echo "<script>alert('Invalid Username and Password')</script>";
		}
	}
}

?>
<form name="f" method="post" action="" onSubmit="mysubmit();">

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
<p align="center"><h1>Pets Food Details</h1></p>

<?php
if(!$con)
{	
	echo "Connectio error ".mysqli_connect_error();
}
else
{

   $q="select *from fooddata";
   
   $result=mysqli_query($con,$q);
   echo "<table align='center' cellspacing='10'>";
  //echo "<tr><td>";
   
   echo mysqli_error($con);	
   while($r=mysqli_fetch_assoc($result))
   {
	  
	   $pic=$r['photo'];
	   
	   echo "<tr><td rowspan='6'><img src='food/$pic' width='150' height='150'>";
	   echo "</td><td><b>Food Name:</b>   ".$r['foodname']."</td></tr>";
	   echo "<tr>";
	   echo "<td><b>Price:</b> Rs   ".$r['price']."</td></tr>";
	   	   echo "<tr>";
	   echo "<td><b>Weight:</b>	   ".$r['weight']."</td></tr>";
	   echo "<tr>";
	   echo "<td><b>Expiry Date:</b>   ".$r['expirydate']."</td></tr>";
	   echo "<tr>";
	   echo "<td><b>Ingredients:</b>   ".$r['ingredients']."</td></tr>";
	   echo "<tr>";
	   echo "<td><a href='#'>Add To Cart</a></td></tr>";
	   echo "<tr><td colspan='2'><hr></td></tr>";
	   
	//	echo "</table>";
	   
	   
   }
   echo "</table>";
}


?>
</td>
<td  colspan="2">
<p align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Home.php"><img src="images/h.png" width="50" /></a></p>

<table align="center" cellpadding="10" cellspacing="10">
<tr></tr>

<tr><td>E-mail Id:</td><td><input type="text" name="user" id="user"  /><span id="t1"><span></td></tr>
<tr><td>Password:</td><td><input type="password" name="pass" id="pass" /><span id="t2"><span></td></tr>
<tr><td colspan="2" align="center"><input type="submit" name="signin" id="signin" value="Sign In" />
<input type="reset" name="clear" id="clear" value="Clear" /></td></tr>
<tr><td colspan="2" align="center"><a href="Register.php">New User?</a></td></tr>
</table>
<br />
<br />
<img src="images/p.png" />
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
