<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang="en">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>OWNER REGISTRATION</title>
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
			var name=document.forms["oregform"]["FIRSTNAME"].value;
			if(name=="")
			{
			alert('Firstname is empty');
		    return false;
			}
	
	        var name=document.forms["oregform"]["LASTNAME"].value;
			if(name=="")
			{
			alert('Lastname is empty');
		    return false;
			}
			var name=document.forms["oregform"]["EMAIL"].value;
			if(name=="")
			{
			alert('Email is empty');
		    return false;
			}
	
	        var name=document.forms["oregform"]["MOBILENO"].value;
			if(name=="")
			{
			alert('Mobile no. is empty');
		    return false;
			}
			var name=document.forms["oregform"]["ADDRESS"].value;
			if(name=="")
			{
			alert('Address is empty');
		    return false;
			}
			
			var name=document.forms["oregform"]["P_PHOTO"].value;
			if(name=="")
			{
			alert('Profile photo is empty');
		    return false;
			}
	
	        var name=document.forms["oregform"]["REGISTRATIONDATE"].value;
			if(name=="")
			{
			alert('Registration date is empty');
		    return false;
			}
			var name=document.forms["oregform"]["PASSWORD"].value;
			if(name=="")
			{
			alert('Password is empty');
		    return false;
			}
	 
	    }
	</script>

	
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="#">OWNER REGISTRATION
                      <!--  <img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form action="ownerreg_action.php" method="post" name="oregform" onSubmit="return checkval()">
						 <div class="form-group">
                            <label>FIRSTNAME</label>
                            <input type="text" class="form-control" name="FIRSTNAME" placeholder="Enter first name">
                        </div>
						 <div class="form-group">
                        <label>LASTNAME</label>
                        <input type="text" class="form-control" name="LASTNAME" placeholder="Enter last name" >
                        </div>
                        
                     
                            <div class="form-group">
                                <label>EMAIL</label>
                                <input type="email" class="form-control" name="EMAIL" placeholder="Enter the email">
                        </div>
                                <div class="form-group">
                                    <label>MOBILENO</label>
                                    <input type="text" class="form-control" name="MOBILENO" placeholder="enter the mobile no">
                        </div>
                                   <div class="form-group">
									   <label>ADDRESS</label>
                                                                
                                                                <textarea name="ADDRESS" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                                                            </div>
						<div class="form-group">
                                    <label>PROFILE PHOTO</label>
                                    <input type="file" class="form-control" name="PROFILE" placeholder="insert image">
                        </div>
						
						
						<div class="form-group">
                                    <label>REGISTRATIONDATE</label>
                                    <input type="date" class="form-control" name="REGISTRATIONDATE" placeholder="Enter the registrationdate">
                        </div>
						
                          <div class="form-group">
                                    <label>PASSWORD</label>
                                    <input type="password" class="form-control" name="PASSWORD" placeholder="enter the password">
                        </div>
                        <div class="form-group">
                           
                                <input type="checkbox"> Agree the terms and policy
                            </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                                    
                                    <div class="register-link m-t-15 text-center">
                                        <p>Already have account ? <a href="userlogin.php"> Sign in</a></p>
                                    </div>
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
