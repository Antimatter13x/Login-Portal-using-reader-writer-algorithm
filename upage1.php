<?php
session_start();
?>

<!DOCTYPE>
<html>
<body><title>SHOPPING</title>
<h1>
<center>
<p>Welcome!!It's shopping Time</p>
<p>Sale is on!!!Discount and gift voucher avail!!!</p>
</center>
</h1>
<div id="frm">
<fieldset>
<legend>Crab Your Products</legend>
<form action="callc.php" method="post">
<br>Enter Details of the product:<br><br>
Product id:<input type="number" name="proid" min="1001" max="1006">
<br><br>Quantity:<input type="number" name="qty" min="1">
<br><br><input type="submit" id="bn" value="BUY!!">
</form>
</fieldset>
</div>


</body>
<style>
body{

background-image:url("1.jpg");
}

input[type=text],input[type=password]
{
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;

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
#frm
{ 
  
   width:30%;
   border-radius:5px;
   margin:100px auto;
font-family:Comic Sans MS; 
  padding:12px; 
}
h1
{
font-family:Segoe Script;
color:blue;
}
#bn
{ 
font-family:Comic Sans MS;
font-size:17px;
color:#000;
background:white;
padding:5px;
}

</style>

</html>

<?php
echo $_SESSION['read_count'];
?></body>
</html>
