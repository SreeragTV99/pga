<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$theemail=$_POST["Username"];
$thepassword=$_POST["password"];
$query="select * from owner_reg where EMAIL='$theemail' and PASSWORD='$thepassword'";
$res=mysql_query($query);
$rowcount=mysql_num_rows($res);

if($rowcount>0)
{
	$a=mysql_fetch_array($res);

	$_SESSION["OID"]=$a['OID'];
	
	
	?>
<script>

	window.location.href="owner_index.php";
	</script>
<?php
	//header('location:owner_index.php');
}
	
else
{
?> 
<script>alert('UERNAME AND PASSWORD DOESNT MATCH');window.location='owner_login.php';</script>
<?php
}
?>
