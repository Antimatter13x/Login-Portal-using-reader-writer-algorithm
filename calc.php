<?php
$link=mysqli_connect("localhost","root","","product");
if($link===false)
{die("Error:Coudnot connect. ".mysqli_connect_error());
}
$prid=$_POST['proid'];
$q=$_POST['qty'];
$sql="SELECT UNIT_PRICE FROM PRODUCT_DETAILS where PID=$prid";
if($result=mysqli_query($link,$sql))
{if(mysqli_num_rows($result)>0)
{$up=mysqli_fetch_array($result);
 $price=$q*$up['UNIT_PRICE'];
echo "Purchase Details:<br>Product Id: ".$prid."<br>Quantity: ".$q."<br>Total Price: ".$price;
mysqli_free_result($result);
}else
{echo "No records found";}
}			
mysqli_close($link);
?>