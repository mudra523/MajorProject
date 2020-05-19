<?php
include 'Connection.php';

$query = "SELECT * FROM userdb ";

$result = $conn->query($query) or die($conn->error);
if($result){
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_array($result)){
            $to = $row['U_EMAIL'];
            $subject = "Ldrp CE-IT Notify you...";
            $txt = "Hey There is Official notification from college do checkout and download if you want to! ";
            $headers = "From: ceit.ldrp@gmail.com" . "\r\n" .
            "CC: ceit.ldrp@gmail.com";
            mail($to,$subject,$txt,$headers);
        }
        echo "<script>alert('Mail done successfully')</script>";
        echo '<script>window.location="AdminDataManager.php"</script>';
        mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $query. " . mysqli_error($conn);
}
?>