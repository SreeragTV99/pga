<?php
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");

$bid=$_GET['bid'];

$q="update booking_details set APPROVE_STATUS=1 where BID='$bid'";
$res=mysql_query($q);
if($res)
{
	?>
<script>
	alert ('SUCCESSFULLY APPROVED');
	window.location.href='oviewbooking.php';
</script>
<?php
}
else
{
	?>
	
	<script>
	alert ('FAILED');
	window.location.href='oviewbooking.php';
</script>
<?php
}
?>