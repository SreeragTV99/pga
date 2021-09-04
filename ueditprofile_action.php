<?php
session_start();

mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$uid=$_SESSION['ID'];
$thefname=$_POST['firstname'];
$thelname=$_POST['LASTNAME'];
$theemail=$_POST['EMAIL'];
$themobno=$_POST['MOBILENO'];
$theaddress=$_POST['ADDRESS'];
$image=$_FILES['PROFILE']['name'];
$imagefile=$_FILES['PROFILE']['tmp_name'];
$imagesize=$_FILES['PROFILE']['size'];
$dir="userphoto/";
$fil=$dir.$image;
move_uploaded_file($imagefile,$dir.$image);

$query="update user_reg set FIRSTNAME='$thefname',LASTNAME='$thelname',EMAIL='$theemail',MOBILENO='$themobno',ADDRESS='$theaddress',P_PHOTO='$image' where UID='$uid'";
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('YOUR PROFILE HAS BEEN SUCCESSFULLY UPDATED');window.location='user_profile.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='ueditprofile.php';</script>
<?php
	
}
echo $uid;
?>
