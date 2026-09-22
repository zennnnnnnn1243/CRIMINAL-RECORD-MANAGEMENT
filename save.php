<?php

$name = $_GET["name"];
$age = $_GET["age"];
$crime = $_GET["crime"];
$address = $_GET["address"];
$status = $_GET["status"];

$conn = mysqli_connect("localhost", "root", "", "samar_db_sample");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO criminal_records
(name, age, crime, address, status)
VALUES
('$name', '$age', '$crime', '$address', '$status')";

if (mysqli_query($conn, $sql)) {
    echo "Record saved successfully!";
} else {
    echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);

?>

<br><br>

<a href="index.php">Add Another Record</a>
<br>
<a href="view.php">View Records</a>