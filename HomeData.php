<?php
include 'Connection.php';

$semester = isset($_POST['semester']) ? $_POST['semester'] : '';
$category = isset($_POST['category']) ? $_POST['category'] : '';

switch ($category) {
    case 'Exam Time Table':
    case 'Exam Syllabus':
    case 'Exam Seat Number':
    case 'Quetion Paper':
    case 'Result':
        $query = "SELECT * FROM circulardb WHERE CATAGORY='$category' AND SEMESTER='$semester' ORDER BY ID DESC;";
        break;
    case 'Activity':
    case 'Event':
    case 'Notice':
        $query = "SELECT * FROM circulardb WHERE CATAGORY='$category' AND SEMESTER='$semester' ORDER BY ID DESC;";
        break;
    default:
        $query = "SELECT * FROM circulardb ORDER BY ID DESC;";
}


$result = $conn->query($query) or die($conn->error);


echo "<div class='row'>";
echo "<table class='table text-white'>";

while ($row = $result->fetch_assoc()) {
    echo '<tr>';
    echo '<td style="width:260px">' . $row['DATE'] . '</td>';
    echo '<td style="width:380px">' . $row['C_NAME'] .
        '</td>';
    echo '<td>';
    echo "<button id='sidebarCollapse' 
                type='submit' 
                class='btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4 text-dark'  name='submit' 
                role='button'
                style='border:none;padding:0px;background:transparent'
            >
            <a href='Download.php?ID={$row['ID']}'>
                <download>
                    <i class='fa fa-download mr-2' style='color:white;font-size:22px'></i>
                </download>
            </a>
        </button>";
    echo '</td>';
    echo '</tr>';
}
echo '</table>';
echo '</div>';
      
