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
.a
{
	background-color:#f39c12;
	color:white;
	text-align:center;
	padding:5px 5px 5px 5px;
	border:1px solid #f39c12;
	border-radius:4px;
	
}
p
{
	line-height:30px;
	word-spacing:5px;
	color:black;
	font-family:monotype corsiva;
	font-size:18px;
	

	
}
</style>
</head>

<body>
<?php
session_start();
if(isset($_SESSION['user']))
{
	
?>
<table  cellspacing="0" width="100%" border="0">
<tr  class="demo" height="50px">
<td class="aa" ><a href="Userprofile.php" class="ss">My Profile</a></td>
<td class="aa"><a href="Usershopping.php" class="ss">Shopping</a></td>
<td class="aa"><a href="Userorderinfo" class="ss">Order Details</a></td>
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
<td colspan="5">
<h1>Pet Guide</h2>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
Here are some useful pet quide tips for your pets. Easy and convenient for you to learn more on how to 
understand them. basic intructions to useful information not just for your pet but also for other animals.
</p>
<table border="0" align="center" cellspacing="20" cellpadding="5">
<tr>
<td><h3 class="a">Pet Training Guide</h3><p>Teaching your dog the basic commands of obedience <br>will make your household a much more pleasant place.<br>

Your dog will be happy because it wants to please you,<br> and because it wants to reap the rewards of good behaviour.</p></td>
<td><h3 class="a">Make Them Behave</h3><p>When dogs get bored and lonely, they might chew, dig,or<br> bark too much.Or they might sleep all day, which isn't healthy.<br>

Taking your dog to classes, or teaching him yourself <br>gives him something to do and helps build his confidence.</p></td>
</tr>
<tr>
<td><h3 class="a">Food that they need</h3><p>"Organic" pet foods are those made without the use<br> of conventional pesticides and artificial fertilizers,<br>f
ree from human or industrial waste contamination and<br>processed without ionizing radiation or 
food additives.<br>If food animals are involved, they must be raised without<br>
the routine use of antibiotics growth hormones</p></td>
<td><h3 class="a">Do's and Dont's</h3><p>Take your sweet time deciding on which pet.this is a very<br> important decision, and the deciding part is a whole lot of fun<br>
Throughly research the animals you are considering.<br>
Acquire a pet on impulse or on a whim.<br>
Acquire a pet as an ego extension.<br>
Acquire a pet as a gift for someone else.</p></td>
</tr>
</table>
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
}
else
{
	header("location:Home.php");
}
?>
</body>
</html>
