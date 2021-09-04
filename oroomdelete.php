<?php
session_start();

mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$roomid=$_GET['roomid'];

$query="delete from room_reg where rid='$roomid'"; 
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('YOUR ROOM HAS BEEN SUCCESSFULLY DELETED');window.location='oviewrooms.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='oviewrooms.php';</script>
<?php
	
}
echo $oid;
?>
