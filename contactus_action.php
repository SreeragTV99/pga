<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$thetitle=$_POST["PAGETITLE"];
$thedescrition=$_POST["PAGEDESCRIPTION"];
$query="update contactus set PAGETITLE='$thetitle',PAGEDESCRIPTION='$thedescrition'";
$res=mysql_query($query);
if($res)	
{
?>
<script>
alert('SUCCESSFULLY UPDATED')
	window.location.href="admin_index.php";
	</script>
<?php
	//header('location:owner_index.php');
}
	
else
{
?> 
<script>window.location='aboutus.php';</script>
<?php
}
?>
