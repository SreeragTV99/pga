<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$oid=$_SESSION['OID'];		
$currentpassword=$_POST['CURRENTPASSWORD'];
$newpassword=$_POST['NEWPASSWORD'];
$result=mysql_query("select PASSWORD from owner_reg where OID='$oid'");	

	if($currentpassword!=mysql_result($result,0))
	{
		?>
<script>alert('Your current password is incurrect');window.location.href='opassword_change.php';</script>
<?php
	}
	else
	{
$query="update owner_reg set PASSWORD='$newpassword' where OID='$oid'";
mysql_query($query);
if($query)
{
	?>
	<script>alert('Password successfully updated');window.location.href='owner_index.php';</script>
	<?php	
}

	}

