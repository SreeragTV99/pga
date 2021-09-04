<?php
session_start();

mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$aid=$_SESSION['AID'];
$theusername=$_POST['USERNAME'];
$image=$_FILES['PROFILEPHOTO']['name'];
$imagefile=$_FILES['PROFILEPHOTO']['tmp_name'];
$imagesize=$_FILES['PROFILEPHOTO']['size'];
$dir="adminphoto/";
$fil=$dir.$image;
move_uploaded_file($imagefile,$dir.$image);

$query="update admin_login set USERNAME='$theusername',PROFILEPHOTO='$image' where AID='$aid'";
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('YOUR PROFILE HAS BEEN SUCCESSFULLY UPDATED');window.location='admin_profile.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='aeditprofile.php';</script>
<?php
	
}
echo $uid;
?>
