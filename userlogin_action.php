<?php
	session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$theemail=$_POST['email'];
$thepassword=$_POST['password'];
$query="select * from user_reg where EMAIL='$theemail' and PASSWORD='$thepassword'";
$res=mysql_query($query);
$rowcount=mysql_num_rows($res);

if($rowcount>0)
{
	

	$a=mysql_fetch_array($res);

	$_SESSION['ID']=$a['UID'];
	header('location:user_index.php');
}
else
{
	?>
<h1>INVALID USERNAME OR PASSWORD</h1>
<?php
	
}
	
	?>

