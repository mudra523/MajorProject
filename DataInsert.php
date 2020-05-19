
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
          circu_name: {
            required: true                        
          },
          file: {
            required: true
          },
          catagory: {
            required: true
          },
          sem: {
            required: true                        
          }
        })
      }); 
    </script>
    <style>
      label{color:white}
      .error {
        color: red;
      }
      .bgroudcolor {
      background: linear-gradient(to right, #000000, #636c6d);
    }
    .upload-btn{
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

  <title>Document</title>
</head>
<body>
<header class="header">
            <div class="topbar clearfix">
                <div class="container">
                
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
                              <li><a href="AdminDataManager.php">All Circulars</a></li>
                              <li><a href="page-contact.html">Contact</a></li>
                              <li><a href="index.html">Logout</a></li>
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
                            <h3>Add Circular</h3>
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
        <form action="Upload.php" method="POST" class="border m-5 p-5" id="form" enctype="multipart/form-data">
            <div class="form-group">
              <label for="Circular Name">Circular Name</label>
              <input type="text" name="circu_name" id="circu_name" class="form-control" placeholder="Name your circular hear">
            </div>
            <div class="form-group">
              <label for="File To Upload">File To Upload</label>
              <input type="file" name="file" id="file" class="form-control" placeholder="Chose File to be Upload ">
            </div>
            <div class="form-group">
              <label for="Catagory">Catagory</label>
              <select  class="form-control" name="catagory" >
                <option  value="Exam Time Table">Exam Time Table</option>
                <option  value="Exam Syllabus">Exam Syllabus</option>
                <option  value="Exam Seat Number">Exam Seat Number</option>
                <option  value="Quetion Paper">Quetion Paper</option>
                <option  value="Result">Result</option>
                <option  value="Activity">Activity</option>
                <option  value="Events">Events</option>
                <option  value="Notice">Notice</option>           
              </select>
            </div>
            <div class="form-group">
              <label for="Semester">Semester</label>
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
            <!-- <div class="form-group">
              <label for="File To Upload">Date:</label>
              <input type="date" name="date" id="date" class="form-control" >
            </div> -->
            <div class="text-center">
                <button name="submit" id="submit" class="upload-btn">Upload</button>            
            </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    </div>
</body>
</html>