<?php
session_start();

mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$oid=$_SESSION['OID'];
$thefname=$_POST['FIRSTNAME'];
$thelname=$_POST['LASTNAME'];
$theemail=$_POST['EMAIL'];
$themobno=$_POST['MOBILENO'];
$theaddress=$_POST['ADDRESS'];
$image=$_FILES['PROFILE']['name'];
$imagefile=$_FILES['PROFILE']['tmp_name'];
$imagesize=$_FILES['PROFILE']['size'];
$dir="ownerphoto/";
$fil=$dir.$image;
move_uploaded_file($imagefile,$dir.$image);

$query="update owner_reg set FIRSTNAME='$thefname',LASTNAME='$thelname',EMAIL='$theemail',MOBILENO='$themobno',ADDRESS='$theaddress',P_PHOTO='$image' where OID='$oid'";
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('YOUR PROFILE HAS BEEN SUCCESSFULLY UPDATED');window.location='owner_profile.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='oeditprofile.php';</script>
<?php
	
}
echo $oid;
?>
