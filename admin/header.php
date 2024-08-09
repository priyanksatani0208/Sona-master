<?php
if(isset($_SESSION['email']))
{
	
}
else
{
	echo "<script>
	window.location='index';
	</script>";
}
?>
<!DOCTYPE HTML>
<html>

<head>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Minimal Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript">
    addEventListener("load", function() {
        setTimeout(hideURLbar, 0);
    }, false);

    function hideURLbar() {
        window.scrollTo(0, 1);
    }
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <!-- Custom Theme files -->
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js"> </script>
    <!-- Mainly scripts -->
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <!-- Custom and plugin javascript -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js"></script>
    <script src="js/screenfull.js"></script>

    <!--dataTables -->

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <script>
    $(document).ready(function() {
        $('.table').DataTable();
    });
    </script>

    <!--dataTables-->

    <script>
    $(function() {
        $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

        if (!screenfull.enabled) {
            return false;
        }



        $('#toggle').click(function() {
            screenfull.toggle($('#container')[0]);
        });



    });
    </script>

    <!----->

    <!--pie-chart--->
    <script src="js/pie-chart.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#demo-pie-1').pieChart({
            barColor: '#3bb2d0',
            trackColor: '#eee',
            lineCap: 'round',
            lineWidth: 8,
            onStep: function(from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-2').pieChart({
            barColor: '#fbb03b',
            trackColor: '#eee',
            lineCap: 'butt',
            lineWidth: 8,
            onStep: function(from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });

        $('#demo-pie-3').pieChart({
            barColor: '#ed6498',
            trackColor: '#eee',
            lineCap: 'square',
            lineWidth: 8,
            onStep: function(from, to, percent) {
                $(this.element).find('.pie-value').text(Math.round(percent) + '%');
            }
        });


    });
    </script>
    <!--skycons-icons-->
    <script src="js/skycons.js"></script>
    <!--//skycons-icons-->
</head>

<body>
    <div id="wrapper">

        <!----->
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header.php">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1> <a class="navbar-brand" href="dashboard.php">Hotel Booking</a></h1>
            </div>
            <div class=" border-bottom">
                <div class="full-left">
                    <div class="clearfix"> </div>
                </div>


                <!-- Brand and toggle get grouped for better mobile display -->

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="drop-men">
                    <ul class=" nav_1">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle dropdown-at" data-toggle="dropdown"><span
                                    class=" name-caret">admin123@gmail.com<i class="caret"></i></span></a>
                            <!-- <ul class="dropdown-menu " role="menu"> -->
                                <!-- <li><a href="profile"><i class="fa fa-user"></i>Profile</a></li> -->

                            </ul>
                        </li>

                    </ul>
                </div><!-- /.navbar-collapse -->
                <div class="clearfix">

                </div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="dashboard" class=" hvr-bounce-to-right"><i
                                        class="fa fa-dashboard nav_icon "></i><span class="nav-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b> Admin </b>
                                        <center>Dashboard</center></span> </a>
                            </li>


                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-indent nav_icon"></i> <span
                                        class="nav-label">Hotel Booking </span><span class=""></span></a>
                            </li>

                            <li>
                                <a href="add_rooms" class=" hvr-bounce-to-right"> <i
                                        class="fa fa-user nav_icon"></i>Add Room's</a>
                            </li>

                            <li>
                                <a href="manage_rooms" class=" hvr-bounce-to-right"> <i class="fa fa-user nav_icon"></i>Manage Room's</a>
                            </li>

                            <li>
                                <a href="view_customer" class=" hvr-bounce-to-right"> <i
                                        class="fa fa-user nav_icon"></i>view Customer</a>
                            </li>                

                            <li>
                                <a href="view_booking" class=" hvr-bounce-to-right"><i
                                        class="fa fa-user nav_icon"></i> <span class="nav-label">View booking</span>
                                </a>
                            </li>

                            <li>
                                <a href="view_contact" class=" hvr-bounce-to-right"><i
                                        class="fa fa-user nav_icon"></i> <span class="nav-label">view Contact</span>
                                </a>
                            </li>
                            <li>
                                <a href="view_feedback" class=" hvr-bounce-to-right"><i
                                        class="fa fa-user nav_icon"></i> <span class="nav-label">View Feedback</span>
                                </a>
                            </li>

                            <li>
                                <a href="report" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i> <span
                                        class="nav-label">Report</span> </a>
                            </li>

                            <li>
                                <a href="admin_logout" class=" hvr-bounce-to-right"><i class="fa fa-user nav_icon"></i>
                                    <span class="nav-label">Logout</span> </a>
                            </li>


                        </ul>
                    </div>
                </div>
        </nav>
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="content-main">