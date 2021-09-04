<?php
session_start();
if(!isset($_SESSION['ID']))
{
	//header('location:index.php');
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
    <title>PG DETAILS</title>
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
                <a class="navbar-brand" href="./">USER</a><!--<img src="images/logo.png" alt="Logo"></a>-->
                <a class="navbar-brand hidden" href="./"><img src="images/logo2.png" alt="Logo"></a>
            </div>

            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="user_index.php"> <i class="menu-icon fa fa-dashboard"></i>HOME</a>
                    </li>
					 <li class="active">
                        <a href="room_view.php"> <i class="menu-icon fa fa-dashboard"></i>VIEW ROOM</a>
                    </li>
					
					 <li class="active">
                        <a href="viewmybooking.php"> <i class="menu-icon fa fa-dashboard"></i>VIEW BOOKING</a>
                    </li>
					 <li class="active">
                        <a href="ucomplaint.php"> <i class="menu-icon fa fa-dashboard"></i>COMPLAINTS</a>
                    </li>
					 <li class="active">
                        <a href="user_profile.php"> <i class="menu-icon fa fa-dashboard"></i>PROFILE</a>
                    </li>
					 <li class="active">
                        <a href="upassword_change.php"> <i class="menu-icon fa fa-dashboard"></i>CHANGE PASSWORD</a>
                    </li>
					   </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
					
					
					
                   <!-- /.menu-title -->
                    
                       
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-puzzle-piece"></i><a href="ui-buttons.html">Buttons</a></li>
                            <li><i class="fa fa-id-badge"></i><a href="ui-badges.html">Badges</a></li>
                            <li><i class="fa fa-bars"></i><a href="ui-tabs.html">Tabs</a></li>
                            <li><i class="fa fa-share-square-o"></i><a href="ui-social-buttons.html">Social Buttons</a></li>
                            <li><i class="fa fa-id-card-o"></i><a href="ui-cards.html">Cards</a></li>
                            <li><i class="fa fa-exclamation-triangle"></i><a href="ui-alerts.html">Alerts</a></li>
                            <li><i class="fa fa-spinner"></i><a href="ui-progressbar.html">Progress Bars</a></li>
                            <li><i class="fa fa-fire"></i><a href="ui-modals.html">Modals</a></li>
                            <li><i class="fa fa-book"></i><a href="ui-switches.html">Switches</a></li>
                            <li><i class="fa fa-th"></i><a href="ui-grids.html">Grids</a></li>
                            <li><i class="fa fa-file-word-o"></i><a href="ui-typgraphy.html">Typography</a></li></ul></ul>
                  </li>
                    <li class="menu-item-has-children dropdown">
                      <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-th"></i><a href="forms-basic.html">Basic Form</a></li>
                            <li><i class="menu-icon fa fa-th"></i><a href="forms-advanced.html">Advanced Form</a></li>
                      </ul>
                  </li>

                   
                    <li class="menu-item-has-children dropdown">
                      <ul class="sub-menu children dropdown-menu">
                        <li><i class="menu-icon fa fa-fort-awesome"></i><a href="font-fontawesome.html">Font Awesome</a></li>
                            <li><i class="menu-icon ti-themify-logo"></i><a href="font-themify.html">Themefy Icons</a></li>
                      </ul>
                  </li>
                   
                  
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
                          
							 <form class="search-form" method="post" action="searchroom.php">
                                <input class="form-control mr-sm-2" type="text" placeholder="Search by state" aria-label="Search" name="mysearch">
								<input type="submit" />
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
                            <a class="nav-link" href="user_profile.php"><i class="fa fa-user"></i> My Profile</a>

                            

                            <a class="nav-link" href="logout.php"><i class="fa fa-power-off"></i> Logout</a>
                        </div>
                    </div>

                  

                </div>
            </div>

        </header><!-- /header -->
        <!-- Header-->

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                  <!--  <div class="page-title" align="center">-->
                    <div class="page-title" align="center">
                        <h1>PAYING GUEST ACCOMODATION</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
							<li class="active"><a href="user_index.php">Home</a></li>
							<li class="active"><a href="room_view.php">View Room</a></li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
		
	
		
		<?php
		mysql_connect("localhost","root","")or die("can't connect to server");
		mysql_select_db("pga")or die("no such db");
		$res=mysql_query("select * from room_reg where STATUS='1'");
		while($row=mysql_fetch_array($res))
		{
			?>
		<div class="col-md-4">
			<a href="room_single_view.php?roomid=<?php echo $row['RID']?>">.
                        <div class="card">
                            <img class="card-img-top" src="pgpic/<?php echo $row['IMAGE']; ?>" alt="Card image cap">
							
                            <div class="card-body">
                                <h4 class="card-title mb-3"><?php echo $row['PGNAME']; ?></h4>
								 Ac:<?php
													
													if($row['AC']=='YES')
													{
														?>
													<font color="#20DD60"> <?php echo $row['AC'];?></font>
													<?php
													}else
													{?>
													<font color="#E90F13"> <?php echo $row['AC'];?></font>
													<?php
														
													}?>
								
								 Balcony:<?php
													
													if($row['BALCONY']=='YES')
													{
														?>
													<font color="#20DD60"> <?php echo $row['BALCONY'];?></font>
													<?php
													}else
													{?>
													<font color="#E90F13"> <?php echo $row['BALCONY'];?></font>
													<?php
														
													}?>
								
								Parking:<?php
													
													if($row['PARKING']=='YES')
													{
														?>
													<font color="#20DD60"> <?php echo $row['PARKING'];?></font>
													<?php
													}else
													{?>
													<font color="#E90F13"> <?php echo $row['PARKING'];?></font>
													<?php
														
													}?>
								
								 Electricty:<?php
													
													if($row['ELECTRICITY']=='YES')
													{
														?>
													<font color="#20DD60"> <?php echo $row['ELECTRICITY'];?></font>
													<?php
													}else
													{?>
													<font color="#E90F13"> <?php echo $row['ELECTRICITY'];?></font>
													<?php
														
													}?>
							 	 Full furnished:<?php
													
													if($row['FULL_FURNISHED']=='YES')
													{
														?>
													<font color="#20DD60"> <?php echo $row['FULL_FURNISHED'];?></font>
													<?php
													}else
													{?>
													<font color="#E90F13"> <?php echo $row['FULL_FURNISHED'];?></font>
													<?php
														
													}?><br>
								Rent per month:<?php  echo $row['RENT_PER_MONTH'];
									if($row['RENT_PER_MONTH'])
									{?>
									<font color="#20DD50"</font>
									<?php
									}
			      					?>
								
                               <!-- <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p> -->
                            </div>
							<input type="hidden" value="<?php echo $row['RID']; ?>" name="hroomid"/>
							<input type="button" value="VIEW DETAILS " class="btn btn-primary btn-flat m-b-30 m-t-30"/>
                        </div>
			 
                    </div>
            </a>
		    <?php
		}
        ?>
</div>
</div>         <!-- .content -->
    </div><!-- /#right-panel -->

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
