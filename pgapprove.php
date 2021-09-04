<?php
session_start();
if(!isset($_SESSION['AID']))
{
	header('location:admin_index.php');
}
else{
	mysql_connect("localhost","root","");
	mysql_select_db("pga");
	$rid=$_GET['roomid'];
	if($res=mysql_query("update room_reg set STATUS='1' where RID='$rid'"))
	   {
		   ?><script>alert("Approved");window.location.href="apgdetails.php";</script><?php
		
	   }
	
} 