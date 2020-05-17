<?php
include 'Connection.php';

$id= $_GET['ID'];

$del="DELETE FROM circulardb WHERE ID=$id ";

mysqli_query($conn,$del);

header('location:AdminDataManager.php')
?>
