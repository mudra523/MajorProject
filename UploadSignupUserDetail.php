<?php
include 'Connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  $u_name = $_POST['u_name'];
  $email = $_POST['email'];
  $sem = $_POST['sem'];    
  $enroll_no = $_POST['enroll_no'];
  $pwd = $_POST['pwd'];

  $sql="INSERT INTO userdb (U_NAME,U_EMAIL,SEMESTER,ENROLL_NO,PASSWORD) 
          VALUES('" . $u_name . "','" . $email . "','" . $sem . "','" . $enroll_no . "','" . $pwd . "')";

   $result=$conn->query($sql);
  if ($result === TRUE) {
    echo "<script>alert('You have sign up successfully')</script>";
    echo '<script>window.location="UserLogIn.php"</script>';
  } else {
    echo "<script>alert('Please enter proper dtail')</script>";
    echo '<script>window.location="UserSignUP.php"</script>';
  }
}
?>
