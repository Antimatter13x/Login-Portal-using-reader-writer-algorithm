<?php
session_start();
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

mysqli_free_result($result);
}else
{echo "No records found";}
}			
mysqli_close($link);
?>
<html>
<body>
<center>
<h1>Successfull Shopping!!!</h1></center>
<div id="middle">
<h3>
<p>-----Purchase Details-----</p>

<p>Product Id:  <?php echo $prid;?></p>
<p>Quantity: <?php echo $q;?></p>
<p>Total Price:  <?php echo $price;?></p>
<button><a href="logout.php"><h5>LOGOUT</h3></a>
</button>
</div>


</body>
<style>
body
{
background-image:url("1.jpg");
background-size:1680px 780px;
}
a{
color:#000;
text-decoration:none;
}
button{

font-family:Comic Sans MS;
font-size:17px;
color:#000;
background:white;
padding:5px;
margin-left:59%;

}
h1{
font-family:Comic Sans MS;
color:blue;
}
h3{
font-family:Comic Sans MS;
color:blue;
}
a{
font-family:Comic Sans MS;
color:blue;
}
#middle
{
font-family:Comic Sans MS;
color:blue;
font-size:90%;
   width:20%;
   border-radius:5px;
   margin:100px auto;
 
  padding:50px;

}
</html>
