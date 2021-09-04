
<?php
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$oid=$_GET['oid'];
$thepgname=$_POST['PGNAME'];
$thetype=$_POST['TYPEOFPG'];
$thestate=$_POST['STATE'];
$thecity=$_POST['CITY'];
$therentperday=$_POST['RENTPERDAY'];
$therentpermonth=$_POST['RENTPERMONTH'];
$thenoofrooms=$_POST['NOOFROOMS'];
$thelimitofperson=$_POST['LIMIT'];
$theaddress=$_POST['ADDRESS'];
$image=$_FILES['IMAGE']['name'];
$imagefile=$_FILES['IMAGE']['tmp_name'];
$imagesize=$_FILES['IMAGE']['size'];
$dir="pgpic/";
$fil=$dir.$image;
move_uploaded_file($imagefile,$dir.$image);
$theelectricity=$_POST['ELECTRICITY'];
$theparking=$_POST['PARKING'];
$thefurnished=$_POST['FULLFURNISHED'];
$theac=$_POST['AC'];
$thebalcony=$_POST['BALCONY'];
$thetablestudylamp=$_POST['TABLESTUDYLAMP'];
$thelaundry=$_POST['LAUNDRY'];
$thesecurity=$_POST['SECURITY'];
$thebreakfast=$_POST['BREAKFAST'];
$thelunch=$_POST['LUNCH'];
$thedinner=$_POST['DINNER'];
$query="insert into room_reg(OID,PGNAME,TYPE,STATE,CITY,RENT_PER_DAY,RENT_PER_MONTH,NO_OF_ROOMS,`LIMIT`,ADDRESS,IMAGE,ELECTRICITY,PARKING,FULL_FURNISHED,AC,BALCONY,TABLESTUDYLAMP,LAUNDRY,SECURITY,BREAKFAST,LUNCH,DINNER) values('$oid','$thepgname','$thetype','$thestate','$thecity','$therentperday','$therentpermonth','$thenoofrooms','$thelimitofperson','$theaddress','$image','$theelectricity','$theparking','$thefurnished','$theac','$thebalcony','$thetablestudylamp','$thelaundry','$thesecurity','$thebreakfast','$thelunch','$thedinner')";
$res=mysql_query($query);
if($res)
{
	?>
<script>
	alert ('YOUR PG IS SUCCESSFULLY REGISTERED');
	window.location.href='owner_index.php';
</script>
<?php
}
else
{
	?>
<script>
	alert ('YOUR PG IS NOT REGISTERED');
	window.location.href='room_reg.php';
</script>
<?php


}
?>
