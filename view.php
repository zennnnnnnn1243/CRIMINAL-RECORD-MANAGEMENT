<?php

$conn = mysqli_connect("localhost", "root", "", "samar_db_sample");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$result = mysqli_query($conn, "SELECT * FROM criminal_records");

?>

<!DOCTYPE html>
<html>
<head>
    <title>Criminal Records</title>
</head>
<body>

<h2>Criminal Records</h2>

<table border="1" cellpadding="10">

<tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Crime</th>
    <th>Address</th>
    <th>Status</th>
</tr>

<?php

while ($row = mysqli_fetch_assoc($result)) {

?>

<tr>
    <td><?php echo $row["id"]; ?></td>
    <td><?php echo $row["name"]; ?></td>
    <td><?php echo $row["age"]; ?></td>
    <td><?php echo $row["crime"]; ?></td>
    <td><?php echo $row["address"]; ?></td>
    <td><?php echo $row["status"]; ?></td>
</tr>

<?php
}

mysqli_close($conn);
?>

</table>

<br>

<a href="index.php">Add New Record</a>

</body>
</html>