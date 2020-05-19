<?php
include('Helper.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="style.css">
    <script async src="//jsfiddle.net/bootstrapious/ko18ravd/embed/"></script>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <title>LDRP | circulars</title>

     <!-- Site Icons -->
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="home_style.css">
</head>

<body>

<div id="wrapper">
<header class="header">
            <div class="topbar clearfix">
                <div class="container">
                    <div class="row-fluid" style="margin-bottom: 82px;">
                        <div class="col-md-6 col-sm-6 text-left">
                            <p>
                                <strong><i class="fa fa-phone"></i></strong> + 91 – 079 – 23241492 &nbsp;&nbsp;
                                <strong><i class="fa fa-envelope"></i></strong> <a href="mailto:#"> info@ldrp.ac.in</a>
                            </p>
                        </div><!-- end left -->
                        <div class="col-md-6 col-sm-6 hidden-xs text-right">
                            <div>
                                <a href="UserLogin.php" style="margin-right: 30px;">Login</a>
                                <a href="UserSignUp.php">Signup</a>
                                <!-- <a class="facebook" href="#" data-tooltip="tooltip" data-placement="bottom" title="Facebook"><i class="fa fa-facebook"></i></a>              
                                <a class="twitter" href="#" data-tooltip="tooltip" data-placement="bottom" title="Twitter"><i class="fa fa-twitter"></i></a>
                                <a class="google" href="#" data-tooltip="tooltip" data-placement="bottom" title="Google Plus"><i class="fa fa-google-plus"></i></a>
                                <a class="linkedin" href="#" data-tooltip="tooltip" data-placement="bottom" title="Linkedin"><i class="fa fa-linkedin"></i></a>
                                <a class="pinterest" href="#" data-tooltip="tooltip" data-placement="bottom" title="Pinterest"><i class="fa fa-pinterest"></i></a> -->
                            </div><!-- end social -->
                        </div><!-- end left -->
                    </div><!-- end row -->
                    <nav class="navbar navbar-default yamm">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <div class="logo-normal">
                            <a class="navbar-brand" href="index.html"><img src="images/logo.png" alt="" height="50px"
                                    width="220px"></a>
                        </div>
                    </div>

                    <div id="navbar" class="navbar-collapse collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="index.html">Home</a></li>
                            <li><a href="circulars.php">Circulars</a></li>
                            <li><a href="AdminLogin.php">Admin</a></li>
                            <li><a href="page-contact.html">Contact</a></li>
                        </ul>
                    </div>
                </nav><!-- end navbar -->
                </div><!-- end container -->
            </div><!-- end topbar -->
        </header>
<!-- Vertical navbar -->
<section class="section db pb-5">
            <div class="container">
                <div class="row" style="margin-top: 90px;">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>All Circulars</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                    <div class="row">
                        <div class="col-xs-3">
                            <div id="sidebar">
                                <ul class="nav flex-column bg-white mb-0">
                                <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                                <h3><a href="circulars.php">All circulars</a><h3>
                                            </a>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                                ->  Exam TimeTable
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Exam Time Table') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ->  Exam Syllabus
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Exam Syllabus') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ->  Exam Seat Number
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Exam Seat Number') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ->  Question Paper
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Quetion Paper') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light " type="button" id="dropdownMenu1"
                                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            ->  Result
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Result') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Activity"
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ->  Activity
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Activity') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Event"
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ->  Event
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Event') ?>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="nav-item">
                                        <div class="dropdown dropright">
                                            <a class="nav-link text-dark font-italic bg-light ajax-call" type="button" data-category="Notice"
                                            data-toggle="dropdown"
                                            aria-haspopup="true" aria-expanded="false">
                                            ->  Notice
                                            </a>
                                            <div class="dropdown-menu dropdown-primary">
                                                <?php Helper::generateLinkFromCategory('Notice') ?>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xs-9">
                            <!-- Page content holder -->
                            <div class="bgroudcolor" id="content">
                                <!-- Toggle button -->
                                <script>
                                    $(function () {
                                        // Sidebar toggle behavior
                                        $('#sidebarCollapse').on('click', function () {
                                            $('#sidebar, #content').toggleClass('active');
                                        });
                                        $.post("HomeData.php",
                                            function (data, status) {
                                                $('#demo').html(data)
                                            });

                                        $('.ajax-call').on('click', function () {
                                            let semester = $(this).data('value');
                                            let category = $(this).data('category');

                                            $.post("HomeData.php",
                                                {semester, category},
                                                function (data, status) {
                                                    $('#demo').html(data)
                                                });
                                        })
                                    });
                                </script>

                                <!-- <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4">
                                    <i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">circular</small></button> -->

                                <!-- Demo content -->
                                <h2 class="display-4 text-white"></h2>
                                <!-- <p class="lead text-white mb-0">Here are the circulars and notice </p> -->
                                <!-- <div class="separator"></div> -->
                                <div class="row text-white">
                                    <div class="col-lg-12 ">
                                        <div class="container-fluid shadow" style="padding:20px;">
                                            <div class="m-3" id="demo">

                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- End demo content -->
                                </div>
                            </div>
                        </div>

            </div><!-- end container -->
        </div>
                                </div>
    </section>

    <footer class="section footer noover">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Address:</h3>
                            <div class="newsletter-widget">
                                <p>LDRP Institute of Technology & Research,<br>Near KH-5,<br>
                                    Sector-15,<br>Gandhinagar - 382015..</p>
                            </div><!-- end newsletter -->
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Contact Us</h3>
                            <ul class="list-inline">
                                <li>E-Mail: info@ldrp.ac.in</li>
                                <li>Phone: + 91 - 079 - 23241492</li>
                                <li>Fax: + 91 - 079 - 23241493</li>
                            </ul>
                        </div><!-- end widget -->
                    </div><!-- end col -->

                    <div class="col-lg-3 col-md-3">
                        <div class="widget clearfix">
                            <h3 class="widget-title">Join us today</h3>
                            <p>Would you like to Join.</p>
                            <a href="#" class="readmore">Became a Teacher</a>
                        </div><!-- end widget -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </footer><!-- end footer -->

        <div class="copyrights">
            <div class="container">
                <div class="clearfix">
                    <div class="cop-logo float-left">
                        <a href="#"><img src="images/logo.png" alt=""></a>
                    </div>
                </div>
            </div><!-- end container -->
        </div><!-- end copy -->
    </div><!-- end wrapper -->




</body>
</html>
