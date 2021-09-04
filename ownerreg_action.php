<?php
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
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
$thedate=$_POST['REGISTRATIONDATE'];
$thepassword=$_POST['PASSWORD'];

$query="insert into owner_reg(FIRSTNAME,LASTNAME,EMAIL,MOBILENO,ADDRESS,P_PHOTO,REGISTRATIONDATE,PASSWORD)values('$thefname','$thelname','$theemail','$themobno','$theaddress','$image','$thedate','$thepassword')";
$res=mysql_query($query);
if($res)
{
	?>
<script>alert('SUCCESSFULL');window.location='owner_login.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='owner_reg.php';</script>
<?php
	
}
?>

