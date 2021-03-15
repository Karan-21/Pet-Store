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
<form name="f" method="post" action="" onSubmit="mysubmit();">
<?php
include("DB.php");
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



</td>
</tr>
<tr>
<td colspan="4" align="center">
<marquee>

<div class="hh">
Welcome To Our Pet Store!!!
</div>
</marquee>
<p align="center"><h1>ALL CATS BREED DETAILS!!!</h1></p>
<?php
if(!$con)
{	
	echo "Connectio error ".mysqli_connect_error();
}
else
{

   $q="select *from subcategory where cid=2";
   
   $result=mysqli_query($con,$q);
   echo "<table align='center' cellspacing='10'>";
  //echo "<tr><td>";
   
   echo mysqli_error($con);	
   while($r=mysqli_fetch_assoc($result))
   {
	   //echo "<table><tr>";
	   $sid=$r['subid'];
	   $pic=$r['photo'];
	   echo "<tr><td rowspan='5'><a href='viewdetail.php?id=$sid'><img src='pet/$pic' width='150' height='150'></a>";
	   echo "</td><td>".$r['breedname']."</td></tr>";
	   echo "<tr>";
	   echo "<td>Life Time:".$r['lifespan']."</td></tr>";
	   	   echo "<tr>";
	   echo "<td>Color:".$r['color']."</td></tr>";
	   echo "<tr>";
	   echo "<td>Height:".$r['height']."</td></tr>";
	   echo "<tr>";
	   echo "<td>Weight:".$r['weight']."</td></tr>";
	//	echo "</table>";
	   
	   
   }
   echo "</table>";
}


?>
<p align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<a href="Home.php"><img src="images/h.png" width="50" /></a></p>

</td>
<td align="right">
<img src="" />
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
