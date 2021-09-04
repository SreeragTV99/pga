<?php
mysql_connect("localhost","root","")or die("can't connect to server");
mysql_select_db("pga")or die("no such db");
$gettingid=$_GET['roomid'];
$q="select * from room_reg where RID='$gettingid'";
	$row=mysql_fetch_array(mysql_query($q));



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
    <title>ROOM SINGLE VIEW</title>
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

<body>
    <!-- Left Panel -->

    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">

            <div class="navbar-header">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="./">USER<!--<img src="images/logo.png" alt="Logo">--></a>
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
                        <a href="index.php"> <i class="menu-icon fa fa-dashboard"></i>COMPLAINTS</a>
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
                            <a class="nav-link" href="user_profile.php"><i class="fa fa-user"></i> My Profile</a>

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

        <div class="breadcrumbs">
            <div class="col-sm-4">
                <div class="page-header float-left">
                    <div class="page-title">
                        <h1>Dashboard</h1>
                    </div>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="page-header float-right">
                    <div class="page-title">
                        <ol class="breadcrumb text-right">
                            <li><a href="#">Dashboard</a></li>
                            <li><a href="#">UI Elements</a></li>
                            <li class="active">Typography</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>

        <div class="content mt-3">
            <div class="animated fadeIn">

                <div class="ui-typography">
                    <div class="row">
                        <div class="col-md-12">


                            <div class="card">
                                <div class="card-header">
                                    <strong class="card-title" v-if="headerText"> <h1 class="pb-2 display-4" align="center"><?php echo $row['PGNAME'];?></h1></strong>
                                </div>

                                <div class="card-body">

                                    <div class="typo-headers">
                                       
                                       <img src="pgpic/<?php echo $row['IMAGE'];?>" width="1189" height="597"/>
                                    </div>
								</div>
							</div>
									
							
							
							
								
                          <div class="card">
                                   <div class="card-header">
                        
                                         <strong>PG HOUSE'S DETAILS</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                       
														<table class="table table-bordered">
														<thead class="thead-dark">
															<tr>
															
																
																
																
															</tr>
															</thead>
                                        <tbody>
											<tr>
												<td>Rent per day </td>
												<td> <?php echo $row['RENT_PER_DAY'];?>/-	</td>
											</tr>
											<tr>	<td>Rent per month </td>
											<td> <?php echo $row['RENT_PER_MONTH'];?>/-	</td> 
											</tr>
											<tr>	<td>Number of rooms</td>
												<td><?php echo $row['NO_OF_ROOMS'];?> </td> 
										    </tr>
											<tr>	<td>Maximum limit of persons  </td>
												<td><?php echo $row['LIMIT'];?></td>
											</tr>
											<tr><td>Address:</td>
												<td><?php echo $row['ADDRESS'];?></td>
												
												
											</tr>				
								        </tbody>
														</table>
														</div>
														
			</div>
							
														
														
														
														<div class="card">
                                   <div class="card-header">
                                         <strong>FACILITIES</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                       
														<table class="table table-bordered">
														<thead class="thead-dark">
															<tr>
															
																
																
																
															</tr>
															</thead>
                                        <tbody>
											<tr>
												<td>                      
													Ac:</td>
												<?php
													
													if($row['AC']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['AC'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['AC'];?></font></td> </tr>
													<?php
														
													}?>
														
											<tr>			
														
												<td>                      
													Balcony:</td>
												<?php
													
													if($row['BALCONY']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['BALCONY'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['BALCONY'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
															
											<tr>			
														
												<td>                      
													Parking:</td>
												<?php
													
													if($row['PARKING']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['PARKING'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['PARKING'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
															
											<tr>			
														
												<td>                      
													Electricity:</td>
												<?php
													
													if($row['ELECTRICITY']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['ELECTRICITY'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['ELECTRICITY'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
															
											<tr>			
														
												<td>                      
													Full furnished:</td>
												<?php
													
													if($row['FULL_FURNISHED']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['FULL_FURNISHED'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['FULL_FURNISHED'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
															
											<tr>			
														
												<td>                      
													Table/study lamp:</td>
												<?php
													
													if($row['TABLESTUDYLAMP']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['TABLESTUDYLAMP'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['TABLESTUDYLAMP'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
											
															
											<tr>			
														
												<td>                      
													 Laundry:</td>
												<?php
													
													if($row['LAUNDRY']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['LAUNDRY'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['LAUNDRY'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
											
															
											<tr>			
														
												<td>                      
													Security:</td>
												<?php
													
													if($row['SECURITY']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['SECURITY'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['SECURITY'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
										
								        </tbody>
														</table>
										
                                                </address>
												
                                            </div>
											
                             <!--           <div class="col-md-6">
                                                <h3 class="mb-3">Well</h3>
                                                <div class="jumbotron">
                                                    Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
                                                </div>    -->
                                            </div>
						
									<div class="card">
                                   <div class="card-header">
                                         <strong>MEALS OFFERED</strong> 
                                                    </div>
                                                    <div class="card-body card-block">
                                                       
														<table class="table table-bordered">
														<thead class="thead-dark">
															<tr>
															
																
																
																
															</tr>
															</thead>
                                        <tbody>
											
															
											<tr>			
														
												<td>                      
													 Breakfast:</td>
												<?php
													
													if($row['BREAKFAST']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['BREAKFAST'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['BREAKFAST'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
															
											<tr>			
														
												<td>                      
													 lunch:</td>
												<?php
													
													if($row['LUNCH']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['LUNCH'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['LUNCH'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
											
															
											<tr>			
														
												<td>                      
													 Dinner:</td>
												<?php
													
													if($row['DINNER']=='YES')
													{
														?>
											 <td><font color="#20DD60"> <?php echo $row['DINNER'];?></font></td> 
													<?php 
													}else
													{?>
											 <td><font color="#E90F13"> <?php echo $row['DINNER'];?></font></td> 
													<?php
														
													}?>
												
											</tr>
											
											
											
											
								        </tbody>
														</table>
										
                                      
                                              
													
                                                
										<a href="userbooking.php?roomid=<?php echo $gettingid?>" class="btn btn-primary btn-flat m-b-30 m-t-30">Book Now</a>
                                            </div>
											
                             <!--           <div class="col-md-6">
                                                <h3 class="mb-3">Well</h3>
                                                <div class="jumbotron">
                                                    Zebras have excellent eyesight. It is believed that they can see in color. Like most ungulates, the zebra's eyes are on the sides of its head, giving it a wide field of view.
                                                </div>    -->
                                            </div>
						
						
						
						
						
						
						
						
                                        </div>
                                    </div>

                                </div>
                            </div>


                        </div>
                    </div>
                </div>



            </div><!-- .animated -->
        </div><!-- .content -->


    </div><!-- /#right-panel -->

    <!-- Right Panel -->


    <script src="vendors/jquery/dist/jquery.min.js"></script>
    <script src="vendors/popper.js/dist/umd/popper.min.js"></script>
    <script src="vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="assets/js/main.js"></script>


</body>

</html>
