<?php
include 'Connection.php';
if(isset($_GET['ID'])){
    $ID= $_GET['ID'];
    $query = "SELECT * FROM circulardb WHERE ID=$ID";
    $result = $conn->query($query) or die($conn->error);
    $file = mysqli_fetch_assoc($result);
    $file_name = $file['FILE'];
    $fileDestination = ("uploads/$file_name");
    if (file_exists($fileDestination)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($fileDestination));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($fileDestination));
        readfile($fileDestination);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE ID=$ID";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}