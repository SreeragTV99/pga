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
}
?>
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
    <title>OWNER PROFILE</title>
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

<body>


    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
				<a class="navbar-brand" href="user_index.php">OWNER</a><!--<img src="images/logo.png" alt="Logo"></a>-->
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

   <!--    <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>MY PROFILE</h1>
                    </div>
                </div>
            </div>
	-->		
		<!--	  <div class="col-md-4" align="center">
                        <div class="card" align="center">
                            <div class="card-header">
                                <i class="fa fa-user"></i><strong class="card-title pl-2">Profile Card</strong>
                            </div>
                            <div class="card-body">
                                <div class="mx-auto d-block">
                               <!--     <img class="rounded-circle mx-auto d-block" src="images/admin.jpg" alt="Card image cap">-->
	<aside>	
		<section>
			<div>
		
		
		<?php
															
															mysql_connect("localhost","root","");
															mysql_select_db("pga");
													    	$oid=$_SESSION['OID'];
															$q="select usercomplaint.*,room_reg.PGNAME from usercomplaint inner join room_reg on usercomplaint.RID=room_reg.RID where usercomplaint.OID='$oid'";
															$res=mysql_query($q);
														
														?>
<center>	  <div class="col-md-12">
					 <div class="card-header">
                                <i class="fa fa-user"></i><strong class="card-title pl-2">Feedbacks </strong>
                            </div>
								<?php while($row=mysql_fetch_array($res))
															{ ?>
									<div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="mediumModalLabel"><?php echo $row['PGNAME']; ?></h5>
                                <!--<button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>-->
                            </div>
                            <div class="modal-body">
                                <p>
                                    <?php echo $row['COMPLAINT']; ?>
                                </p>
                            </div>
                            <!--<div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                                <button type="button" class="btn btn-primary">Confirm</button>
                            </div>-->
                        </div> <?php } ?>
                        </div>
                 
		</center>
		
		
		
		  
					
				</div> 
				
			</section>
		</aside>
		
		
		


  <!--      </div><!-- .content -->   
 <!--   </div><!-- /#right-panel -->

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
