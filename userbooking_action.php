<?php
session_start();
if(!isset($_SESSION['ID']))
{
	//header('location:index.php');
}
else
{
$uid=$_SESSION['ID'];
$rid=$_GET['roomid'];
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$thecheckindate=$_POST['CHECKINDATE'];
$themessage=$_POST['MESSAGE'];
//$thepaymentstatus=$_POST['PAYMENT_STATUS'];
	if($thecheckindate==""||$themessage=="")
	{
		?>
<script>alert('FAILD');window.location='userbooking.php?roomid=<?php echo $rid?>';</script>
<?php
	}
	else
	{
$query="insert into booking_details(RID,UID,CHECKIN_DATE,MESSAGE) values($rid,$uid,'$thecheckindate','$themessage')";
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('YOUR BOOKING IS PROCESSING...');window.location='user_index.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='userbooking.php';</script>
<?php
}
}
}
?>
