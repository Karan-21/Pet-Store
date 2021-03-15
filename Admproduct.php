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
<td colspan="3">

<br /><br />
<br /><br />

<h1><p align="center">
Product Order Details</h1></p>

<?php





if(!$con)
{
		echo "the connection error is ".mysqli_connect_error();
		
}
else
{
		
		
		$q="select *from shopping";
		$result=mysqli_query($con,$q);
		echo mysqli_error($con);
		echo "<table cellpadding='10'  align='center' cellspacing='3' border='2'>";
	
		echo "<tr><th>Customer Name</th><th>Order Date</th><th>Product Id</th><th>Product Name</th><th>Price</th><th>Quantity</th><th>Amount</th></tr>";
		while($r=mysqli_fetch_assoc($result))
		{
		
			echo "<tr><td>".$r['cname']."</td><td>".$r['pdate']."</td><td>".$r['pid']."</td><td>".$r['pname']."</td><td>".
			$r['price']."</td><td>".$r['quantity']."</td><td>".$r['amount']."</td></tr>";
			
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
<td colspan="2">
<img src="images/b1.jpg" />
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
