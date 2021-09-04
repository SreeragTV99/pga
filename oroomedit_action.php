
<?php
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$rid=$_GET['rid'];
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
$query="update room_reg set OID='$oid',PGNAME='$thepgname',TYPE='$thetype',STATE='$thestate',CITY='$thecity',RENT_PER_DAY='$therentperday',RENT_PER_MONTH='$therentpermonth',NO_OF_ROOMS='$thenoofrooms',`LIMIT`='$thelimitofperson',ADDRESS='$theaddress',IMAGE='$image',ELECTRICITY='$theelectricity',PARKING='$theparking',FULL_FURNISHED='$thefurnished',AC='$theac',BALCONY='$thebalcony',TABLESTUDYLAMP='$thetablestudylamp',LAUNDRY='$thelaundry',SECURITY='$thesecurity',BREAKFAST='$thebreakfast',LUNCH='$thelunch',DINNER='$thedinner' where RID='$rid'";
$res=mysql_query($query);
if($res)
{
	?>
<script>
	alert ('YOUR PG IS SUCCESSFULLY REGISTERED');
	window.location.href='oviewrooms.php';
</script>
<?php
}
else
{
	?>
<script>
	alert ('YOUR PG IS NOT REGISTERED');
	window.location.href='oroomsingleview.php?roomid=<?php echo $rid; ?>';
</script>
<?php


}
?>
