<?php
mysql_connect("localhost","root","");
mysql_select_db("pga");
$uid=$_GET['uid'];
$rid=$_GET['rid'];
$q2=mysql_query("select * from room_reg where RID='$rid'");
$res2=mysql_fetch_array($q2);
$oid=$res2['OID'];
$complaint=$_POST['COMPLAINT'];
$q="insert into usercomplaint(UID,RID,COMPLAINT,OID)values('$uid','$rid','$complaint','$oid')";
$res=mysql_query($q);
if($res)
{
	?>
<script>alert('SUCCESSFULLY ADDED');window.location='user_index.php';</script>
<?php
}
else{
	
	?>
<script>alert('FAILD');window.location='uaddcomplaint.php';</script>
<?php
}
?>