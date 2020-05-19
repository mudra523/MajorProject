
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>


    
     <!-- Site Icons -->
     <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="home_style.css">
    <script>
      $("#form").validate({
        rules: {
          u_name: {
            required: true                        
          },
          email: {
            required: true,
            email
          },
          sem: {
            required: true
          },
          enroll_no: {
            required: true                        
          }
          pwd: {
            required: true, 
            password
          }
          repwd: {
            required: true                        
          }
        })
      }); 
    </script>
    <style>
      .error {
        color: red;
      }
    </style>
    <style>
        .error {
        color: red;
        }
        .box{
        margin-left:10em;
        margin-top: 5em;
        }
        .login_bg{
        background: gray;
        }
        .bg_page{
        background: #f2f2f2;
        }
        .text_white{
        color: white;
        }
        .bgroudcolor {
          background: linear-gradient(to right, #000000, #636c6d);
        }
        .signup-btn{
          background: white;
          font-size: 20px;
          font-weight: 400;
          color: black;
          border-radius: 26px;
          border: 1px solid white;
          margin-top: 20px;
          width: 125px;
        }
    </style>
  <title>LDRP | sign up</title>
</head>
<body class="bg_page">
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
        <section class="section db pb-5">
            <div class="container">
                <div class="row" style="margin-top: 90px;">
                    <div class="col-md-12">
                        <div class="tagline-message page-title text-center">
                            <h3>User Signup</h3>
                        </div>
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end container -->
        </section><!-- end section -->

        <section class="section gb nopadtop">
            <div class="container">
                <div class="boxed boxedp4">
                  <div class="row">
                    <div class="col-sm-3"></div>
                    <div class="col-sm-6" style="margin:auto;">
                      <div class="card bgroudcolor shadow" style="padding:20px 30px;border-radius:6px;box-shadow: 4px 2px 9px 3px #ccc8c8;">

                        <div class="card-body ">
                          <form action="UploadSignupUserDetail.php" method="POST" class="p-2" id="form" enctype="multipart/form-data">
                              <div class="form-group">
                              <label  class='text_white' for="Circular Name">User Name</label>
                              <input type="text" name="u_name" id="u_name" class="form-control" placeholder="Enter Your name hear">
                              </div>

                              <div class="form-group">
                                  <label class='text_white'>Email</label>
                                  <input type="text" name="email" id="email"  class="form-control"  placeholder="Enter email address">
                              </div>

                              <div class="form-group">
                              <label class='text_white' for="Semester">Semester</label>
                              <select class="form-control" name="sem" >
                                  <option  value="First">First</option>
                                  <option  value="Second">Second</option>
                                  <option  value="Third">Third</option>
                                  <option  value="Fourth">Fourth</option>
                                  <option  value="Fifth">Fifth</option>
                                  <option  value="Sixth">Sixth</option>
                                  <option  value="Seventh">Seventh</option>
                                  <option  value="Eighth">Eighth</option>
                                  <option  value="ALL">ALL</option>                
                              </select>
                              </div>

                              <div class="form-group">
                              <label  class='text_white' for="Circular Name">Enrollment Number</label>
                              <input type="text" name="enroll_no" id="enroll_no" class="form-control" placeholder="Enter Your Enrollment Number">
                              </div>

                              <div class="form-group">
                                  <label class='text_white'>Password</label>
                                  <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
                              </div>

                              <div class="form-group">
                                  <label class='text_white'>Confirm Password</label>
                                  <input type="password" class="form-control" id="repwd" name="repwd" placeholder="Password">
                              </div>
                              <!-- <div class="form-group">
                              <label for="File To Upload">Date:</label>
                              <input type="date" name="date" id="date" class="form-control" >
                              </div> -->
                              <div class="pt-3 text-center">
                                  <button name="submit" id="submit" class="signup-btn">Sign Up</button>            
                              </div>
                          </form>
                        </div>
                      </div>
                    </div>
                  </div>
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
    </div><!-- end w
              </body>
</html>