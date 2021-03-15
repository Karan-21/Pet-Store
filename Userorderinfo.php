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
<img src="images/d.png"   />
<br /><br />
<br /><br />
</td>
<td colspan="3"  >
<br /><br />

<p><h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Order Details</h1></p>

<?php

$cid=$_SESSION['userid'];



if(!$con)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
		
		$amt=0;
		$q="select *from orderinfo where cid=$cid";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<table cellpadding='10' cellspacing='3' border='2'>";
	
		echo "<tr><th>Order No</th><th>Order Date</th><th>Price</th><th>Shipping Address</th><th>Contact</th></tr>";
		while($r=mysqli_fetch_assoc($result))
		{
			$amt=$amt+$r['amount'];
			echo "<tr><td>".$r['orderno']."</td><td>".$r['orderdate']."</td><td>".$r['amount']."</td><td>".$r['shipaddress']."</td><td>".$r['contact']."</td></tr>";
			
		}
		
	
		echo "</table>";
		
		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		echo "<br><br>";
		
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
