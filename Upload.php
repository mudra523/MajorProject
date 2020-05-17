<?php
include 'Connection.php';
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if (isset($_POST['submit'])) {
  $circu_name = $_POST['circu_name'];

  $file =  $_FILES['file'];
  $fileName  = $_FILES['file']['name'];
  $fileTmpName  = $_FILES['file']['tmp_name'];
  $fileSize = $_FILES['file']['size'];
  $fileError = $_FILES['file']['error'];
  $fileType = $_FILES['file']['type'];
  $fileExt = explode('.',$fileName);
  $fileActualExt = strtolower(end($fileExt));
  $allowed = array ('jpg','jpeg','png', 'pdf', 'docx');
  if(in_array($fileActualExt,$allowed )){
    if($fileError===0){
      if($fileSize < 2000000){
          $fileNameNew=uniqid('',true).".".$fileActualExt;
          $fileDestination='uploads/'.$fileNameNew;
          move_uploaded_file($fileTmpName,$fileDestination);
      }else {
        echo "File too large!";
      }
    }else {
      echo "Failed to upload file.";
    }
  }else {
    echo "You file extension must be .zip, .pdf or .docx";
  }
 
  $catagory = $_POST['catagory'];
  $sem = $_POST['sem'];    

  $sql="INSERT INTO circulardb (C_NAME,FILE,CATAGORY,SEMESTER) 
          VALUES('" . $circu_name . "','" . $fileNameNew . "','" . $catagory . "','" . $sem . "')";

   $result=$conn->query($sql);
  if ($result === TRUE) {
    echo "<script>alert('data is inserted successfully')</script>";
    echo '<script>window.location="AdminDataManager.php"</script>';
  } else {
    echo "<script>alert('data is not inserted')</script>";
    echo '<script>window.location="DataInsert.php"</script>';
  }
}
?>
