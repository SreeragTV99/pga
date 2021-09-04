<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$theemail=$_POST['EMAIL'];
$themobileno=$_POST['MOBILENO']; 
$query="select * from user_reg where EMAIL='$theemail' and MOBILENO='$themobileno'";
$res=mysql_query($query);
$rowcount=mysql_num_rows($res);

if($rowcount>0)
{
	

	$a=mysql_fetch_array($res);

	$_SESSION["ID"]=$a['UID'];
	header('location:user_index.php');
}
else
{
	?>
<h1>INVALID USERNAME OR MOBILE NUMBER</h1>
<?php
	
}
	
	?>
<script>
	alert('data inserted');
//	window.location.href="user_index.php";
	</script>
