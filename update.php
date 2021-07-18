<?php
session_start();
$link=mysqli_connect("localhost","root","","product");
if($link===false)
{die("Error:Coudnot connect. ".mysqli_connect_error());
}
$b=$_POST['a'];
$a=$_POST['c'];
$sql="update product_details set unit_price=$a where pid=$b";
if($result=mysqli_query($link,$sql))
{if(mysqli_num_rows($result)>0)
{$up=mysqli_fetch_array($result);
 
mysqli_free_result($result);
}else
{echo "No records found";}
}			
mysqli_close($link);
header('location:alogout.php');
?>