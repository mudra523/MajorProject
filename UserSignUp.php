
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

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
    </style>
  <title>Sidn Up</title>
</head>
<body class="bg_page">
<div class="container box " >
    <div class="row">
      <div class="col-lg-7 offset-lg-2">
        <div class="card login_bg">
          <div class="card-title ">
            <div class=" text-center">
                <p class="display-4 pt-3">User Sign up</p>
            </div>
          </div>
          <div class="card-body login_bg">
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
                <div class="pt-3">
                    <button name="submit" id="submit" class="btn btn-secondary">Sign Up</button>            
                </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>