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
    <title>Admin Data Manager</title>

         <!-- Site Icons -->
         <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,400i,500,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,400i,700,700i" rel="stylesheet">

    
    <!-- Custom & Default Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="home_style.css">
    <style>
        .add-btn{
      background: white;
      font-size: 20px;
      font-weight: 400;
      color: black;
      border-radius: 26px;
      border: 1px solid black;
      margin-top: 20px;
      width: 125px;
      padding:10px;
    }
    .header-style{
        font-weight:bold;
        color:white;
        border-bottom:1px solid gray;
        margin-bottom:20px;
    }
    .bgroudcolor {
      background: linear-gradient(to right, #000000, #636c6d);
    }
    .btns{
        border:1px solid white;
        padding:10px;
        border-radius:26px;
        width:100px;
        padding: 10px 18px;
        color:white;
    }
    </style>
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
                <div class="boxed boxedp4 ">
                <div class="col-lg-12 ">
                <a href="DataInsert.php" type="submit" class="add-btn" name="submit" role="button"> +  Add New sercular</a>
            </div><br><br>
                <div class="card bgroudcolor shadow" style="padding:20px 30px;border-radius:6px;box-shadow: 4px 2px 9px 3px #ccc8c8;">
                        <div class="card-body ">
                  <div class="row">
           

        <?php
        include 'Connection.php';
        $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
        ?>
        <div class="row">
            <table class="table">
                <thead>
                    <div class="row text-center header-style" style="padding-left:15px">
                        <div class="col-sm-2">DATE</div>
                        <div class="col-sm-3">CIRCULAR</div>
                        <div class="col-sm-2">CATAGORY</div>
                        <div class="col-sm-1">SEMESTER</div>
                        <div class="col-sm-4">ACTIONS</div>
                    </div>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()){                
                ?>
                <div class="row text-center" style="padding-left:15px;margin-bottom:20px">
                    
                <div class="col-sm-2"><?php  echo $row['DATE'] ?></div>
                <div class="col-sm-3"><?php  echo $row['C_NAME'] ?></div>
                <div class="col-sm-2"><?php  echo $row['CATAGORY'] ?></div>
                <div class="col-sm-1"><?php  echo $row['SEMESTER'] ?></div>
                <div class="col-sm-4" style="height:100px">
                    <div class="row" style="height:50px">
                        <a href="Update.php?ID=<?php echo $row['ID']; ?>" style="background:#050567;border:1px solid #050567" type="submit" class="btns" name="submit" role="button">UPDATE</a>
                   
                        <a href="Delete.php?ID=<?php echo $row['ID']; ?>" style="background:#ad1414;border:1px solid #ad1414" type="submit" class="btns" name="submit" role="button">DELETE</a>                    
                </div>
                        <div class="row">
                        <a href="Download.php?ID=<?php echo $row['ID']; ?>" style="background:green;border:1px solid green" type="submit" class="btns" name="submit" role="button">DOWNLOAD</a>                    
               
                        <a href="mail.php?ID=<?php echo $row['ID']; ?>" style="background:#c5c5c5;border:1px solid #c5c5c5" type="submit" class="btns" name="submit" role="button">MAIL</a>                    
                </div>
                </div>
                </div>
                <?php } ?>
            </table>
        </div>
                </div>
                </div>
    </div>
</div>
</div>
</div>
</section>
        
</body>

</html>
