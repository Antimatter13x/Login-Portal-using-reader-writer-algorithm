<?php
session_start();
?>
<!DOCTYPE>
<html>
<body>
<div id="frm">
<fieldset>
<legend>PRODUCT DETAILS </legend>
<form name="login" action="update.php" method="post"><br>
PRODUCT CODE:<input type="textbox" name="a" ><br><br>
COST PRICE:<input type="textbox" name="c" ><br><br>
QUANTITY:<input type="textbox" name="d"><br><br>
</fieldset><br>
<input type="submit" id="bn" value="SUBMIT">
<button><a href="alogout.php">LOGOUT</a></button>
</form>
</div>
</body>
<style>
body{

background-image:url("6.jpg");
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

