<?php
session_start();
$_SESSION['rw_mutex']=1;
?>
<!DOCTYPE html>
<html>
<head>
<title>Shopping Login</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<center>
<h1>
<p>Successfully updated! and logout from server updation!!!</p>
</p></center> 
</body>

<style>
body{

background-image:url("6.jpg");
background-size:1530px 800px;
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