<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$aid=$_SESSION['AID'];		
$currentpassword=$_POST['CURRENTPASSWORD'];
$newpassword=$_POST['NEWPASSWORD'];
$result=mysql_query("select PASSWORD from admin_login where AID='$aid'");	

	if($currentpassword!=mysql_result($result,0))
	{
		?>
<script>alert('Your current password is incurrect');window.location.href='apassword_change.php';</script>
<?php
	}
	else
	{
$query="update admin_login set PASSWORD='$newpassword' where AID='$aid'";
mysql_query($query);
if($query)
{
	?>
	<script>alert('Password successfully updated');window.location.href='admin_index.php';</script>
	<?php	
}

	}

