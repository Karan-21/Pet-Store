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
	   $id=$r['fid'];
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
	   echo "<td><a href='Usercart.php?pid=$id'>Add To Cart</a></td></tr>";
	   echo "<tr><td colspan='2'><hr></td></tr>";
	   
	//	echo "</table>";
	   
	   
   }
   echo "</table>";
}


?>


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
