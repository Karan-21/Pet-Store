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
session_start();
unset($_SESSION['user']);
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
<table width="60%" align="center">
<tr>
<td>
<img  src="images/puppy.jpg" />
</td>
<td><b>What they need</b><br />
<div>
Your pet needs food for energy. It is very important that your pet eats the right food and the right amounts 
of food.
</div>
</td>
<td>
<img  src="images/cat.jpg" />
</td>
<td><b>Something good</b><br />
<div>
Pets need protection from the weather. If it is too hot or too cold, they need a safe, comfortable place 
to feel protected and secure.


</div>
</td>
</tr>
<tr>
<td>
<img  src="images/koi.jpg" />
</td>
<td><b>Kinds of Fish</b><br />
<div>
A cold water aquarium keeps the water at room temperature. You should still include a filtration system. 


</div>
</td>
<td>
<img  src="images/bird2.jpg" />
</td>
<td><b>Fun birds</b><br />
<div>
Enjoy our range of fun bird facts for kids and learn some interesting information. Find out about the 
largest, smallest and fastest birds,how scientists believe they evolved.
</div>
</td>
</tr>
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
</body>
</html>
