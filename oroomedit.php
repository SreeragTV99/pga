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
	$rid=$_GET['roomid'];
	$res=mysql_query("select * from room_reg where RID='$rid'");
	$arr=mysql_fetch_array($res);
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

                        <div class="dropdown for-notification">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="notification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bell"></i>
                                <span class="count bg-danger">5</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="notification">
                                <p class="red">You have 3 Notification</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <i class="fa fa-check"></i>
                                <p>Server #1 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <i class="fa fa-info"></i>
                                <p>Server #2 overloaded.</p>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <i class="fa fa-warning"></i>
                                <p>Server #3 overloaded.</p>
                            </a>
                            </div>
                        </div>

                        <div class="dropdown for-message">
                            <button class="btn btn-secondary dropdown-toggle" type="button"
                                id="message"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="ti-email"></i>
                                <span class="count bg-primary">9</span>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="message">
                                <p class="red">You have 4 Mails</p>
                                <a class="dropdown-item media bg-flat-color-1" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/1.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jonathan Smith</span>
                                    <span class="time float-right">Just now</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-4" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/2.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Jack Sanders</span>
                                    <span class="time float-right">5 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-5" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/3.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Cheryl Wheeler</span>
                                    <span class="time float-right">10 minutes ago</span>
                                        <p>Hello, this is an example msg</p>
                                </span>
                            </a>
                                <a class="dropdown-item media bg-flat-color-3" href="#">
                                <span class="photo media-left"><img alt="avatar" src="images/avatar/4.jpg"></span>
                                <span class="message media-body">
                                    <span class="name float-left">Rachel Santos</span>
                                    <span class="time float-right">15 minutes ago</span>
                                        <p>Lorem ipsum dolor sit amet, consectetur</p>
                                </span>
                            </a>
                            </div>
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

                            <a class="nav-link" href="#"><i class="fa fa-user"></i> Notifications <span class="count">13</span></a>

                            <a class="nav-link" href="#"><i class="fa fa-cog"></i> Settings</a>

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                    <div class="language-select dropdown" id="language-select">
                        <a class="dropdown-toggle" href="#" data-toggle="dropdown"  id="language" aria-haspopup="true" aria-expanded="true">
                            <i class="flag-icon flag-icon-us"></i>
                        </a>
                        <div class="dropdown-menu" aria-labelledby="language">
                            <div class="dropdown-item">
                                <span class="flag-icon flag-icon-fr"></span>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-es"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-us"></i>
                            </div>
                            <div class="dropdown-item">
                                <i class="flag-icon flag-icon-it"></i>
                            </div>
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
                    <form action="oroomedit_action.php?rid=<?php echo $rid; ?>&oid=<?php echo $oid?>" method="post" enctype="multipart/form-data" name="roomregform" onSubmit="return checkval()">
						 <div class="form-group">
                            <label>PG NAME</label>
                            <input type="text" class="form-control" name="PGNAME" value="<?php echo $arr['PGNAME']; ?>" placeholder="Enter the pgname">
                        </div>
						 <div class="form-group">
                       <!-- <label>TYPE</label> -->
                       TYPE OF PG:<?php if($arr['TYPE']=="boys"){ ?><input type="radio" name="TYPEOFPG" value="boys" checked>boys
							
							 <input type="radio" name="TYPEOFPG" value="girls">girls
							 <input type="radio" name="TYPEOFPG" value="boys">both<?php } ?>
							 <?php if($arr['TYPE']=="girls"){ ?><input type="radio" name="TYPEOFPG" value="boys">boys
							
							 <input type="radio" name="TYPEOFPG" value="girls" checked>girls
							 <input type="radio" name="TYPEOFPG" value="boys">both<?php } ?>
							 <?php if($arr['TYPE']=="both"){ ?><input type="radio" name="TYPEOFPG" value="boys">boys
							
							 <input type="radio" name="TYPEOFPG" value="girls">girls
							 <input type="radio" name="TYPEOFPG" value="boys" checked>both<?php } ?>
                        </div>
                    
                          <div class="form-group">
                                <label>STATE</label>
						
                               <select placeholder="Choose a Country..." class="STATE" tabindex="1" name="STATE">
									 <option value="">Choose a State</option>
							        <option value="Andra pradesh" <?php if($arr['STATE']=="Andra Pradesh"){echo "selected";} ?></optio>>Andra pradesh</option>
								    <option value="Arunachal pradesh">Arunachal pradesh</option>
									<option value="Assam" <?php if($arr['STATE']=="Assam"){echo "selected";} ?>>Assam</option>
									<option value="Bihar" <?php if($arr['STATE']=="Bihar"){echo "selected";} ?>>Bihar</option>
									<option value="Chhattisgarh" <?php if($arr['STATE']=="Chhattisgarh"){echo "selected";} ?>>Chhattisgarh</option>
									<option value="Goa" <?php if($arr['STATE']=="Goa"){echo "selected";} ?>>Goa</option>
									<option value="Gujarat" <?php if($arr['STATE']=="Gujarat"){echo "selected";} ?>>Gujarat</option>
									<option value="Haryana" <?php if($arr['STATE']=="Haryana"){echo "selected";} ?>>Haryana</option>
									<option value="Himachal pradesh" <?php if($arr['STATE']=="Himachal Pradesh"){echo "selected";} ?>>Himachal pradesh</option>
									<option value="Jammu Kashmir" <?php if($arr['STATE']=="Jammu Kashmir"){echo "selected";} ?>>Jammu Kashmir</option>
									<option value="Jharkhand" <?php if($arr['STATE']=="Jharkhand"){echo "selected";} ?>>Jharkhand</option>
									<option value="Karnataka" <?php if($arr['STATE']=="Karnataka"){echo "selected";} ?>>Karnataka</option>
									<option value="Kerala" <?php if($arr['STATE']=="Kerala"){echo "selected";} ?>>Kerala</option>
									<option value="Madhya Pradesh" <?php if($arr['STATE']=="Madhya Pradesh"){echo "selected";} ?>>Madhya Pradesh</option>
									<option value="Maharashtra" <?php if($arr['STATE']=="Maharashtra"){echo "selected";} ?>>Maharashtra</option>
									<option value="Manipur" <?php if($arr['STATE']=="Manipur"){echo "selected";} ?>>Manipur</option>
									<option value="Meghalaya" <?php if($arr['STATE']=="Meghalaya"){echo "selected";} ?>>Meghalaya</option>
									<option value="Mizoram" <?php if($arr['STATE']=="Mizoram"){echo "selected";} ?>>Mizoram</option>
									<option value="Nagaland" <?php if($arr['STATE']=="Nagaland"){echo "selected";} ?>>Nagaland</option>
									<option value="Odisha" <?php if($arr['STATE']=="Odisha"){echo "selected";} ?>>Odisha</option>
									<option value="Punjab" <?php if($arr['STATE']=="Punjab"){echo "selected";} ?>>Punjab</option>
									<option value="Rajasthan" <?php if($arr['STATE']=="Rajasthan"){echo "selected";} ?>>Rajasthan</option>
									<option value="Sikkim" <?php if($arr['STATE']=="Sikkim"){echo "selected";} ?>>Sikkim</option>
									<option value="Tamil Nadu" <?php if($arr['STATE']=="Tamil Nadu"){echo "selected";} ?>>Tamil Nadu</option>
									<option value="Telangana" <?php if($arr['STATE']=="Telengana"){echo "selected";} ?>>Telangana</option>
									<option value="Tripura" <?php if($arr['STATE']=="Tripura"){echo "selected";} ?>>Tripura</option>
									<option value="Uttarakhand" <?php if($arr['STATE']=="Uttarakhand"){echo "selected";} ?>>Uttarakhand</option>
									<option value="Uttar pradesh" <?php if($arr['STATE']=="Uttar Pradesh"){echo "selected";} ?>>Uttar pradesh</option>
									<option value="West Bengal" <?php if($arr['STATE']=="West Bengal"){echo "selected";} ?>>West Bengal</option>
							    </select>
                        </div>
							 
                                <div class="form-group">
                                    <label>CITY</label>
                                    <input type="text" class="form-control" name="CITY" placeholder="enter the city" value="<?php echo $arr['CITY'];?>">
                        </div>
						<div class="form-group">
                                    <label>RENT PER DAY</label>
                                    <input type="int" class="form-control" name="RENTPERDAY" placeholder="enter the rent per day" value="<?php echo $arr['RENT_PER_DAY'];?>">
                        </div>
						 <div class="form-group">
                                    <label>RENT PER MONTH</label>
                                    <input type="int" class="form-control" name="RENTPERMONTH" placeholder="enter the rent per month" value="<?php echo $arr['RENT_PER_MONTH'];?>">
                        </div>
						<div class="form-group">
                                    <label>NO OF ROOMS</label>
                                    <input type="int" class="form-control" name="NOOFROOMS" placeholder="enter the no of rooms" value="<?php echo $arr['NO_OF_ROOMS'];?>">
                        </div>
						<div class="form-group">
                                    <label>LIMIT</label>
                                    <input type="int" class="form-control" name="LIMIT" placeholder="Maximum limit of persons" value="<?php echo $arr['LIMIT'];?>">
						</div>
						
                              
                                   <div class="form-group">
									   <label>ADDRESS</label>
                                                                
                                                                <textarea name="ADDRESS" id="textarea-input" rows="5" placeholder="Content..." class="form-control"><?php echo $arr['ADDRESS'];?></textarea>
                                                            </div>
						<div class="form-group">
                                    <label>IMAGE</label>
                                    <input type="file" class="form-control" name="IMAGE" placeholder="insert image">
                        </div>
						<h5>FACILITIES</h5>
						<?php if($arr['ELECTRICITY']=="YES"){?>ELECTRICITY:<input type="radio" name="ELECTRICITY" value="YES" checked>YES
							 <input type="radio" name="ELECTRICITY" value="NO">NO<br><?php } else{ ?>
						ELECTRICITY:<input type="radio" name="ELECTRICITY" value="YES" >YES
							 <input type="radio" name="ELECTRICITY" value="NO" checked>NO <?php } ?>
						<?php if($arr['PARKING']=="YES"){?> PARKING:<input type="radio" name="PARKING" value="YES" checked>YES
							 <input type="radio" name="PARKING" value="NO">NO<br><?php } else{ ?>
							PARKING:<input type="radio" name="PARKING" value="YES">YES
							 <input type="radio" name="PARKING" value="NO" checked>NO<br><?php } ?>
						 <?php if($arr['FULL_FURNISHED']=="YES"){?>FULL FURNISHED:<input type="radio" name="FULLFURNISHED" value="YES" checked>YES
							 <input type="radio" name="FULLFURNISHED" value="NO">NO<br><?php } else{ ?>
							FULL FURNISHED:<input type="radio" name="FULLFURNISHED" value="YES" >YES
							 <input type="radio" name="FULLFURNISHED" value="NO" checked>NO<br><?php } ?>
				  	      <?php if($arr['AC']=="YES"){?>AC:<input type="radio" name="AC" value="YES" checked>YES
							 <input type="radio" name="AC" value="NO">NO<br><?php } else{ ?>
							AC:<input type="radio" name="AC" value="YES">YES
							 <input type="radio" name="AC" value="NO" checked>NO<br> <?php } ?>
						 <?php if($arr['BALCONY']=="YES"){?>BALCONY:<input type="radio" name="BALCONY" value="YES" checked>YES
							 <input type="radio" name="BALCONY" value="NO">NO<br><?php } else{ ?>
							BALCONY:<input type="radio" name="BALCONY" value="YES" >YES
							 <input type="radio" name="BALCONY" value="NO" checked>NO<br><?php } ?>
				    	 <?php if($arr['TABLESTUDYLAMP']=="YES"){?>TABLE/STUDY LAMP:<input type="radio" name="TABLESTUDYLAMP" value="YES" checked>YES
							 <input type="radio" name="TABLESTUDYLAMP" value="NO">NO<br><?php }else {?>
								TABLE/STUDY LAMP:<input type="radio" name="TABLESTUDYLAMP" value="YES" >YES
							 <input type="radio" name="TABLESTUDYLAMP" value="NO" checked>NO<br><?php } ?>
						<?php if($arr['LAUNDRY']=="YES"){?> LAUNDRY:<input type="radio" name="LAUNDRY" value="YES" checked>YES
							 <input type="radio" name="LAUNDRY" value="NO">NO<br><?php } else{ ?>
							LAUNDRY:<input type="radio" name="LAUNDRY" value="YES" >YES
							 <input type="radio" name="LAUNDRY" value="NO" checked>NO<br><?php } ?>
						<?php if($arr['SECURITY']=="YES"){?> SECURITY:<input type="radio" name="SECURITY" value="YES" checked>YES
							 <input type="radio" name="SECURITY" value="NO">NO<br><?php } else{?>
								SECURITY:<input type="radio" name="SECURITY" value="YES">YES
							 <input type="radio" name="SECURITY" value="NO" checked>NO<br><?php } ?>
						 <h5>MEALS</h5>
						 <h6>Choose meals which you offer with</h6>
						<?php if($arr['BREAKFAST']=="YES"){?> BREAKFAST:<input type="radio" name="BREAKFAST" value="YES" checked>YES
							 <input type="radio" name="BREAKFAST" value="NO">NO<br><?php } else{ ?>
							BREAKFAST:<input type="radio" name="BREAKFAST" value="YES">YES
							 <input type="radio" name="BREAKFAST" value="NO" checked>NO<br><?php }?>
						<?php if($arr['LUNCH']=="YES"){?> LUNCH:<input type="radio" name="LUNCH" value="YES" checked>YES
							 <input type="radio" name="LUNCH" value="NO">NO<br><?php } else{ ?>
							 LUNCH:<input type="radio" name="LUNCH" value="YES" >YES
							 <input type="radio" name="LUNCH" value="NO" checked>NO<br><?php } ?>
						<?php if($arr['DINNER']=="YES"){?> DINNER:<input type="radio" name="DINNER" value="YES" checked>YES
							 <input type="radio" name="DINNER" value="NO">NO<br><?php } else{ ?>
								DINNER:<input type="radio" name="DINNER" value="YES" >YES
							 <input type="radio" name="DINNER" value="NO" checked>NO<br><?php } ?>
					
				  
						
                              
						 <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save</button>
                
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
