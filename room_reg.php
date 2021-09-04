<?php
session_start();
if(!isset($_SESSION['OID']))
{
	header('location:owner_login.php');
}
else
{
	mysql_connect("localhost","root","");
	mysql_selectdb("pga");
	$oid=$_SESSION['OID'];
	//$rid=$_SESSION['RID'];
}
?>
<!---->
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
    <title>ROOM REGISTRATION</title>
    <meta name="description" content="Sufee Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="apple-icon.png">
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="vendors/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="vendors/themify-icons/css/themify-icons.css">
    <link rel="stylesheet" href="vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="vendors/selectFX/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="vendors/jqvmap/dist/jqvmap.min.css">


    <link rel="stylesheet" href="assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

</head>
	
	<script>
	function checkval()
		{
			var name=document.forms["roomregform"]["PGNAME"].value;
			if(name=="")
			{
			alert('Name of Pg is empty');
		    return false;
			}
	
	        var name=document.forms["roomregform"]["TYPEOFPG"].value;
			if(name=="")
			{
			alert('Type of Pg is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["STATE"].value;
			if(name=="")
			{
			alert('State is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["CITY"].value;
			if(name=="")
			{
			alert('City is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["RENTPEDAY"].value;
			if(name=="")
			{
			alert('Rent per Day is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["RENTPERMONTH"].value;
			if(name=="")
			{
			alert('Rent per month is empty');
		    return false;
			}
			var name=document.forms["roomregform"]["NOOFROOMS"].value;
			if(name=="")
			{
			alert('No of rooms is empty');
		    return false;
			}
			var name=document.forms["roomregform"]["LIMIT"].value;
			if(name=="")
			{
			alert('Maximum limit of person is empty');
		    return false;
			}
	
	        var name=document.forms["roomregform"]["ADDRESS"].value;
			if(name=="")
			{
			alert('Address is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["IMAGE"].value;
			if(name=="")
			{
			alert('Image is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["ELECTRICITY"].value;
			if(name=="")
			{
			alert('Electricity is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["PARKING"].value;
			if(name=="")
			{
			alert('Parking is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["FULLFURNISHED"].value;
			if(name=="")
			{
			alert('Fullfurnished is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["AC"].value;
			if(name=="")
			{
			alert('Ac is empty');
		    return false;
			}
			var name=document.forms["roomregform"]["BALCONY"].value;
			if(name=="")
			{
			alert('Balcony is empty');
		    return false;
			}
	
	        var name=document.forms["roomregform"]["TABLESTUDYLAMP"].value;
			if(name=="")
			{
			alert('Table or studylamp is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["LAUNDRY"].value;
			if(name=="")
			{
			alert('laundry is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["SECURITY"].value;
			if(name=="")
			{
			alert('Security is empty');
		    return false;
			}
			 var name=document.forms["roomregform"]["BREAKFAST"].value;
			if(name=="")
			{
			alert('Breakfast is empty');
		    return false;
			}
			
			 var name=document.forms["roomregform"]["LUNCH"].value;
			if(name=="")
			{
			alert('Lunch is empty');
		    return false;
			}
			
			 var name=document.forms["roomregform"]["DINNER"].value;
			if(name=="")
			{
			alert('Dinner is empty');
		    return false;
			}
			
			
	    }
	</script>
	
	

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
				<a class="navbar-brand" href="./">OWNER</a><!--<img src="images/logo.png" alt="Logo"></a>-->
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="owner_index.php"> <i class="menu-icon fa fa-dashboard"></i>HOME</a>
                    </li>
					 <li class="active">
                        <a href="room_reg.php"> <i class="menu-icon fa fa-dashboard"></i>ADD ROOMS</a>
                    </li>
					 <li class="active">
                        <a href="oviewrooms.php"> <i class="menu-icon fa fa-dashboard"></i>VIEW ROOMS</a>
                    </li>
					 <li class="active">
                        <a href="oviewbooking.php"> <i class="menu-icon fa fa-dashboard"></i>VIEW BOOKINGS</a>
                    </li>
					 <li class="active">
                        <a href="owner_profile.php"> <i class="menu-icon fa fa-dashboard"></i>PROFILE</a>
                    </li>
					 <li class="active">
                        <a href="opassword_change.php"> <i class="menu-icon fa fa-dashboard"></i>CHANGE PASSWORD</a>
                    </li>
					 <li class="active">
                        <a href="ofeedback.php"> <i class="menu-icon fa fa-dashboard"></i>FEEDBACK</a>
                    </li>
                  <!-- /.menu-title -->
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside><!-- /#left-panel -->

    <!-- Left Panel -->

    <!-- Right Panel -->

    <div id="right-panel" class="right-panel">

        <!-- Header-->
        <header id="header" class="header">

            <div class="header-menu">

                <div class="col-sm-7">
                    <a id="menuToggle" class="menutoggle pull-left"><i class="fa fa fa-tasks"></i></a>
                    <div class="header-left">
                        <button class="search-trigger"><i class="fa fa-search"></i></button>
                        <div class="form-inline">
                            <form class="search-form">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search ..." aria-label="Search">
                                <button class="search-close" type="submit"><i class="fa fa-close"></i></button>
                            </form>
                        </div>

                       

                    </div>
                </div>

                <div class="col-sm-5">
                    <div class="user-area dropdown float-right">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <img class="user-avatar rounded-circle" src="images/admin.jpg" alt="User Avatar">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="owner_profile.php"><i class="fa fa-user"></i> My Profile</a>

                           

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                  

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

          
<body class="bg-dark">


    <div class="sufee-login d-flex align-content-center flex-wrap">
        <div class="container">
            <div class="login-content">
                <div class="login-logo">
                    <a href="user_index.php">ROOM REGISTRATION
                      <!--  <img class="align-content" src="images/logo.png" alt="">-->
                    </a>
                </div>
                <div class="login-form">
                    <form action="roomreg_action.php?oid=<?php echo $oid; ?>" method="post" enctype="multipart/form-data" name="roomregform" onSubmit="return checkval()">
						 <div class="form-group">
                            <label>PG NAME</label>
                            <input type="text" class="form-control" name="PGNAME" placeholder="Enter the pgname">
                        </div>
						 <div class="form-group">
                       <!-- <label>TYPE</label> -->
                       TYPE OF PG:<input type="radio" name="TYPEOFPG" value="boys">boys
							 <input type="radio" name="TYPEOFPG" value="girls">girls
							 <input type="radio" name="TYPEOFPG" value="boys">both
                        </div>
                    
                          <div class="form-group">
                                <label>STATE</label>
						
                               <select placeholder="Choose a Country..." class="STATE" tabindex="1" name="STATE">
									 <option value="">Choose a State</option>
							        <option value="Andra pradesh">Andra pradesh</option>
								    <option value="Arunachal pradesh">Arunachal pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal pradesh">Himachal pradesh</option>
									<option value="Jammu Kashmir">Jammu Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="Uttar pradesh">Uttar pradesh</option>
									<option value="West Bengal">West Bengal</option>
							    </select>
                        </div>
							 
                                <div class="form-group">
                                    <label>CITY</label>
                                    <input type="text" class="form-control" name="CITY" placeholder="enter the city">
                        </div>
						<div class="form-group">
                                    <label>RENT PER DAY</label>
                                    <input type="int" class="form-control" name="RENTPERDAY" placeholder="enter the rent per day">
                        </div>
						 <div class="form-group">
                                    <label>RENT PER MONTH</label>
                                    <input type="int" class="form-control" name="RENTPERMONTH" placeholder="enter the rent per month">
                        </div>
						<div class="form-group">
                                    <label>NO OF ROOMS</label>
                                    <input type="int" class="form-control" name="NOOFROOMS" placeholder="enter the no of rooms">
                        </div>
						<div class="form-group">
                                    <label>LIMIT</label>
                                    <input type="int" class="form-control" name="LIMIT" placeholder="Maximum limit of persons">
						</div>
						
                              
                                   <div class="form-group">
									   <label>ADDRESS</label>
                                                                
                                                                <textarea name="ADDRESS" id="textarea-input" rows="5" placeholder="Content..." class="form-control"></textarea>
                                                            </div>
						<div class="form-group">
                                    <label>IMAGE</label>
                                    <input type="file" class="form-control" name="IMAGE" placeholder="insert image">
                        </div>
						<h5>FACILITIES</h5>
						 ELECTRICITY:<input type="radio" name="ELECTRICITY" value="YES">YES
							 <input type="radio" name="ELECTRICITY" value="NO">NO<br>
						 PARKING:<input type="radio" name="PARKING" value="YES">YES
							 <input type="radio" name="PARKING" value="NO">NO<br>
						 FULL FURNISHED:<input type="radio" name="FULLFURNISHED" value="YES">YES
							 <input type="radio" name="FULLFURNISHED" value="NO">NO<br>
				  	     AC:<input type="radio" name="AC" value="YES">YES
							 <input type="radio" name="AC" value="NO">NO<br>
						 BALCONY:<input type="radio" name="BALCONY" value="YES">YES
							 <input type="radio" name="BALCONY" value="NO">NO<br>
				    	 TABLE/STUDY LAMP:<input type="radio" name="TABLESTUDYLAMP" value="YES">YES
							 <input type="radio" name="TABLESTUDYLAMP" value="NO">NO<br>
						 LAUNDRY:<input type="radio" name="LAUNDRY" value="YES">YES
							 <input type="radio" name="LAUNDRY" value="NO">NO<br>
						 SECURITY:<input type="radio" name="SECURITY" value="YES">YES
							 <input type="radio" name="SECURITY" value="NO">NO<br>
						 <h5>MEALS</h5>
						 <h6>Choose meals which you offer with</h6>
						 BREAKFAST:<input type="radio" name="BREAKFAST" value="YES">YES
							 <input type="radio" name="BREAKFAST" value="NO">NO<br>
						 LUNCH:<input type="radio" name="LUNCH" value="YES">YES
							 <input type="radio" name="LUNCH" value="NO">NO<br>
						 DINNER:<input type="radio" name="DINNER" value="YES">YES
							 <input type="radio" name="DINNER" value="NO">NO<br>
					
				  
						
                              
						 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Register</button>
                
                    </form>
                </div>
            </div>
        </div>
    </div>
		
		
		
		
    <!-- Right Panel -->

    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


    <script src="vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="assets/js/dashboard.js"></script>
    <script src="assets/js/widgets.js"></script>
    <script src="vendors/jqvmap/dist/jquery.vmap.min.js"></script>
    <script src="vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <script src="vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script>
        (function($) {
            "use strict";

            jQuery('#vmap').vectorMap({
                map: 'world_en',
                backgroundColor: null,
                color: '#ffffff',
                hoverOpacity: 0.7,
                selectedColor: '#1de9b6',
                enableZoom: true,
                showTooltip: true,
                values: sample_data,
                scaleColors: ['#1de9b6', '#03a9f5'],
                normalizeFunction: 'polynomial'
            });
        })(jQuery);
    </script>

</body>

</html>
