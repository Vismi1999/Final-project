<?php
if(isset($_GET['id'])){


$conn = mysqli_connect('localhost','root','','hotelsystem');

 if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error."<br>");
}
else{
  //echo  "Success";
}
$sql = "SELECT * FROM tbl_foodmenu";
$result = mysqli_query($conn, $sql);

$filename = "food.csv";
$fp = fopen('php://output', 'w');

while ($row = mysqli_fetch_assoc($result)) {
    fputcsv($fp, $row);
}

fclose($fp);

header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="' . $filename . '";');

mysqli_close($conn);
}
?>