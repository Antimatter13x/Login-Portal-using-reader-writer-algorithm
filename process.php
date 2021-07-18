<?php
session_start();
 if(isset($_SESSION['mutex']))
{ 
  $_SESSION['mutex']=0;
  $_SESSION['rw_mutex']=1;
  $_SESSION['read_count']=0;
}

 $username=$_POST['user'];
 $password=$_POST['pass'];

$link=mysqli_connect("localhost","root","","mydatabase");
$result=mysqli_query($link,"select * from login where username='$username' and password='$password' ");
$row= mysqli_fetch_array($result);



if($row['username']==$username && $row['password']==$password)
{
   
     if($username=="admin")    //admin
        
          {
             if ($_SESSION['read_count']==0)
                 { 
                   $_SESSION['rw_mutex']=0;
                   header('location:procost.php');
		 }
             else 
               header('location:ad_err.php');
         }
    
      else  	 //user
        
         {
             if($_SESSION['rw_mutex']!=0)
              {
                $_SESSION['read_count']= $_SESSION['read_count']+1;
                 header('location:upage1.php');
              }
            else
              
               header('location:u_err.php');
          }
 

}
else		  //incorrect username.
echo"failed to login";
  
?>