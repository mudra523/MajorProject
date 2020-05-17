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

  <script>
    $(document).ready(function() {
      $("#email").focusout(function() {
        var x1 = $("#email").val();
        var pattern_email = "[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$";
        if (x1 == "") {
          $("#sp1").text("Email is required");
          return false;
        } else if (!pattern_email.test(x1)) {
          $("#sp1").text("Email not in Propper formate");
          return false;
        } else {
          return true;
        }
      });
      $("#password").focusout(function() {
        var x2 = $("#password").val();
        var pattern_pass = ".{6,}";
        if (x2 == "") {
          $("#sp2").text("Password is Empty");
          return false;
        } else if (!pattern_pass.test(x2)) {
          $("#sp2").text("Your password is not strong enough");
          return false;
        } else {
          return true;
        }
      });
      /* $("#submit").click(function() {
         var x1 = $("#email").val();
         var x2 = $("#password").val();
         if (x1 == "" || x2 == "") {
           alert("There is something missing in form..");
           return false;
         } else {
           return true;
         }
       });*/
    });
  </script>


  <?php
  include 'Connection.php';
  $result = $conn->query("SELECT*FROM admindb") or die($conn->error);
  function pre_r($array)
  {
    echo '<pre>';
    print_r($array);
    echo '<pre>';
  }
  
  $email_err = $pwd_err = $not = "";
  function test_input($data)
  {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
  if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];
    if (empty($email)) {
      $email_err = "*Required this field";
    } else {
      $email = test_input($email);
      if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $email_err = "*Email not correct";
      }
    }
    if (empty($pwd)) {
      $pwd_err = "*Required this field";
    } else {
      $pwd = test_input($pwd);
      if (strlen($pwd) <= 8) {
        $pwd_err = "Your Password Must Contain At Least 8 Characters!";
      } elseif (!preg_match("#[0-9]+#", $pwd)) {
        $pwd_err = "Your Password Must Contain At Least 1 Number!";
      } elseif (!preg_match("#[A-Z]+#", $pwd)) {
        $pwd_err = "Your Password Must Contain At Least 1 Capital Letter!";
      } elseif (!preg_match("#[a-z]+#", $pwd)) {
        $pwd_err = "Your Password Must Contain At Least 1 Lowercase Letter!";
      } else {
        if (empty($email) && empty($pwd)) {
          $email_err = "*Required this field";
          $pwd_err = "*Required this field";
        } else {
          $qry = "SELECT * FROM admindb WHERE EMAIL='$email' AND PASSWORD='$pwd'";
          $result = $conn->query($qry);
          if ($result->num_rows > 0) {
            header("Location:DataInsert.php");
          } else {
            echo "<script>alert('Invalid Password or Email')</script>";
          }
        }
      }
    }
  }
  ?>

  <style>
    .error {
      color: red;
    }
    .box{
      margin: 150px;
    }
    .login_bg{
      background: black;
    }
    .text_white{
      color: white;
    }
  </style>

  <title>Document</title>

</head>

<body>

  <div class="container box" >
    <div class="row">
      <div class="col-lg-5 offset-lg-3">
        <div class="card">
          <div class="card-title">
            <div class=" text-center">
              <p class="display-4">Log In</p>
            </div>
          </div>
          <div class="card-body login_bg">
            <form action="" method="POST">
              <div class="form-group">
                <label class='text_white'>Email</label>
                <input type="text" class="form-control" id="email" name="email" placeholder="Enter email">
                <span id="sp1" class="error"><?php echo $email_err; ?></span>
              </div>
              <div class="form-group">
                <label class='text_white'>Password</label>
                <input type="password" class="form-control" id="password" name="pwd" placeholder="Password">
                <span id="sp2" class="error"><?php echo $pwd_err; ?></span>
              </div>
              <button type="submit" class="btn btn-secondary" id="submit" name="submit">Login</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
