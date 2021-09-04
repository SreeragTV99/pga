<?php
session_start();
if(!isset($_SESSION['ID']))
{
	//header('location:index.php');
}
else
{
	$uid=$_SESSION['ID'];
	$rid=$_GET['roomid'];
?>

<body><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>USER BOOKING FORM</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">


    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">

    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>



</head>
	<script>
	function checkval()
		{
			var name=document.forms["ubookingform"]["CHECKINDATE"].value;
			if(name=="")
			{
			alert('Checkin date is empty');
		    return false;
			}
	
	        var name=document.forms["ubookingform"]["MESSAGE"].value;
			if(name=="")
			{
			alert('Message is empty');
		    return false;
			}
	    }
	</script>
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="user_index.php">USER BOOKING FORM
                      <!--  <img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form action="userbooking_action.php?roomid=<?php echo $rid?>" method="post" name="ubookingform" onSubmit="return checkval()">
						 <div class="form-group">
                            <label>CHECKINDATE</label>
                            <input type="date" class="form-control" name="CHECKINDATE" placeholder="Enter checkin date">
                        </div>
						
                                   <div class="form-group">
									   <label>MESSAGE</label>
                                                                
                                                                <textarea name="MESSAGE" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                                                            </div>
						
                    <!--  <div class="form-group">
                           
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>-->
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Submit</button>
                                    
                                    
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>

</body>
</html>
<?php } ?>