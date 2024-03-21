<?php 
include 'conn.php';

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject =$_POST['subject'];

$sql = "INSERT INTO `contact`(`name`, `phone`, `email`, `subject`) VALUES ('$name','$email','$phone','$subject');";

// Execute the SQL statement
if (mysqli_query($con, $sql)) {
    echo "Your message reached, we will contact soon";   
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>