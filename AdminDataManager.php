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
    <title>Admin Data Manager</title>
</head>

<body>
    <div class="container-fluid">

        <div class="row">
            <div class="col-lg-12 m-3 ">
                <a href="DataInsert.php" type="submit" class="btn btn-secondary" name="submit" role="button">Add New sercular</a>
            </div>
        </div>

        <?php
        include 'Connection.php';
        $result = $conn->query("SELECT * FROM circulardb ORDER BY ID DESC;") or die($conn->error);
        ?>
        <div class="row">
            <table class="table">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>CIRCULAR</th>
                        <th>CATAGORY</th>
                        <th>SEMESTER</th>
                        <th></th>
                        <th></th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>

                <?php
                while ($row = $result->fetch_assoc()){                
                ?>
                <tr>
                    
                    <td><?php  echo $row['DATE'] ?></td>
                    <td><?php  echo $row['C_NAME'] ?></td>
                    <td><?php  echo $row['CATAGORY'] ?></td>
                    <td><?php  echo $row['SEMESTER'] ?></td>
                    <td>
                        <a href="Update.php?ID=<?php echo $row['ID']; ?>" type="submit" class="btn btn-secondary" name="submit" role="button">UPDATE</a>
                    </td>
                    <td>
                        <a href="Delete.php?ID=<?php echo $row['ID']; ?>" type="submit" class="btn btn-secondary" name="submit" role="button">DELETE</a>                    
                    </td>
                    <td>
                        <a href="Download.php?ID=<?php echo $row['ID']; ?>" type="submit" class="btn btn-secondary" name="submit" role="button">DOWNLOAD</a>                    
                    </td>
                    <td>
                        <a href="mail.php?ID=<?php echo $row['ID']; ?>" type="submit" class="btn btn-secondary" name="submit" role="button">MAIL</a>                    
                    </td>
                </tr>
                <?php } ?>
            </table>
        </div>

    </div>
</body>

</html>
