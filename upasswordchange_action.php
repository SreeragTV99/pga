<?php
session_start();
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$uid=$_SESSION['ID'];		
$currentpassword=$_POST['CURRENTPASSWORD'];
$newpassword=$_POST['NEWPASSWORD'];
$result=mysql_query("select PASSWORD from user_reg where UID='$uid'");	

	if($currentpassword!=mysql_result($result,0))
	{
		?>
<script>alert('Your current password is incurrect');window.location.href='upassword_change.php';</script>
<?php
	}
	else
	{
$query="update user_reg set PASSWORD='$newpassword' where UID='$uid'";
mysql_query($query);
if($query)
{
	?>
	<script>alert('Password successfully updated');window.location.href='user_index.php';</script>
	<?php	
}

	}

