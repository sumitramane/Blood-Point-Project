<?php 
include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$blood_group = $_POST['blood-group'];
$province = $_POST['province'];
$city = $_POST['city'];
$password = $_POST['password'];

$sql = "INSERT INTO `request`(`name`, `email`, `blood_group`, `province`, `city`, `password`) VALUES ('$name','$email','$blood_group','$province','$city', '$password');";

// Execute the SQL statement
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>