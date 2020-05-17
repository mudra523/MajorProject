<?php
include 'Connection.php';
$ID = $_GET['ID'];
$result = $conn->query("SELECT * FROM circulardb WHERE ID=$ID") or die($conn->error);

while ($row = $result->fetch_assoc()) {

    $C_NAME = $row['C_NAME'];
    $FILE = $row['FILE'];
    $CATAGORY = $row['CATAGORY'];
    $SEMESTER = $row['SEMESTER'];
}

if (isset($_POST['submit'])) {
    $C_NAME = $FILE = $CATAGORY = $SEMESTER = "";

    $ID = $_GET['ID'];
    $C_NAME = $_POST['circu_name'];
    $FILE = $_POST['file'];
    $CATAGORY = $_POST['catagory'];
    $SEMESTER = $_POST['sem'];    

    $upd="UPDATE circulardb SET ID=$ID, C_NAME='$C_NAME' , FILE='$FILE' , CATAGORY='$CATAGORY' , SEMESTER='$SEMESTER' WHERE ID=$ID";

    // $ID = $_GET['ID'];
    // $A_NAME = $_POST['aname'];
    // $A_DOB = $_POST['dob'];
    // $A_GENDER = $_POST['gender'];
    // $A_ADDRESS = $_POST['addr'];
    // $A_MOBILE = $_POST['phone'];
    // $A_DESCRIPTION = $_POST['discription'];
    // $upd = "UPDATE AuthoDB SET ID=$ID, A_NAME='$A_NAME' , A_DOB='$A_DOB' , A_GENDER='$A_GENDER' , A_ADDRESS='$A_ADDRESS' , A_MOBILE=$A_MOBILE , A_DESCRIPTION='$A_DESCRIPTION' WHERE ID=$ID";

    mysqli_query($conn, $upd);

    header('location:AdminDatamanager.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {

            $("#form_a").validate({
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
                }
            })
        });
    </script>

    <title>Document</title>
</head>

<body>

    <div class="container-fluid">
        <div style="border: 2px solid black; padding: 5% 5%; margin: 5% 12% ;">
            <h2>Update Circular</h2>
            <br />
            <form action="" method="POST" class="border m-5 p-5" id="form">
                <div class="form-group">
                    <label for="Circular Name">Circular Name</label>
                    <input type="text" name="circu_name" id="circu_name" value="<?php echo $C_NAME; ?>"  class="form-control" placeholder="Name your circular hear">
                </div>
                <div class="form-group">
                    <label for="File To Upload">File To Upload</label>
                    <input type="file" name="file" id="file" value="<?php echo $FILE; ?>" class="form-control" placeholder="Chose File to be Upload ">
                </div>
                <div class="form-group">
                    <label for="Catagory">Catagory</label>
                        <select  class="form-control" name="catagory" >
                            <option value="<?php echo 'Exam Time Table' ?>" <?php echo ($CATAGORY == 'Exam Time Table ' ? 'Selected' : '') ?>>Exam Time Table</option>
                            <option  value="<?php echo 'Exam Syllabus' ?>" <?php echo ($CATAGORY == 'Exam Syllabus' ? 'Selected' : '') ?> >Exam Syllabus</option>
                            <option  value="<?php echo 'Exam Seat Number' ?>" <?php echo ($CATAGORY == 'Exam Seat Number' ? 'Selected' : '') ?>>Exam Seat Number</option>
                            <option  value="<?php echo 'Quetion Paper' ?>" <?php echo ($CATAGORY == 'Quetion Paper' ? 'Selected' : '') ?> >Quetion Paper</option>
                            <option  value="<?php echo 'Result' ?>" <?php echo ($CATAGORY == 'Result' ? 'Selected' : '') ?> >Result</option>
                            <option  value="<?php echo 'Activity' ?>" <?php echo ($CATAGORY == 'Activity' ? 'Selected' : '') ?>>Activity</option>
                            <option  value="<?php echo 'Events' ?>" <?php echo ($CATAGORY == 'Events' ? 'Selected' : '') ?>>Events</option>
                            <option  value="<?php echo 'Notice' ?>" <?php echo ($CATAGORY == 'Notice' ? 'Selected' : '') ?>>Notice</option>           
                        </select>
                </div>
            <div class="form-group">
              <label for="Semester">Semester</label>
              <select class="form-control" name="sem" >
                <option  value="<?php echo 'First' ?>" <?php echo ($SEMESTER == 'First' ? 'Selected' : '') ?> >First</option>
                <option  value="<?php echo 'Second' ?>" <?php echo ($SEMESTER == 'Second' ? 'Selected' : '') ?> >Second</option>
                <option  value="<?php echo 'Third' ?>" <?php echo ($SEMESTER == 'Third' ? 'Selected' : '') ?> >Third</option>
                <option  value="<?php echo 'Fourth' ?>" <?php echo ($SEMESTER == 'Fourth' ? 'Selected' : '') ?> >Fourth</option>
                <option  value="<?php echo 'Fifth' ?>" <?php echo ($SEMESTER == 'Fifth' ? 'Selected' : '') ?> >Fifth</option>
                <option  value="<?php echo 'Sixth' ?>" <?php echo ($SEMESTER == 'Sixth' ? 'Selected' : '') ?> >Sixth</option>
                <option  value="<?php echo 'Seventh' ?>" <?php echo ($SEMESTER == 'Seventh' ? 'Selected' : '') ?> >Seventh</option>
                <option  value="<?php echo 'Eighth' ?>" <?php echo ($SEMESTER == 'Eighth' ? 'Selected' : '') ?> >Eighth</option>
                <option  value="<?php echo 'ALL' ?>" <?php echo ($SEMESTER == 'ALL' ? 'Selected' : '') ?> >ALL</option>                
              </select>
            </div>
            <!-- <div class="form-group">
              <label for="File To Upload">Date:</label>
              <input type="date" name="date" id="date" class="form-control" >
            </div> -->
            <div>
                <button name="submit" id="button" class="btn btn-primary">Update</button>            
            </div>
        </form>
      
        </div>
</body>

</html>
