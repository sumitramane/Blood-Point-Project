<?php 
include 'conn.php';

$name = $_POST['name'];
$dob = $_POST['dob'];
$gender = $_POST['gender'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$province = $_POST['province'];
$city = $_POST['city'];
$occupation = $_POST['occupation'];

$blood_group = $_POST['blood-group'];
$last_donation_date = $_POST['last-donation-date'];
$disease =$_POST['disease'];
$cardiac =$_POST['cardiac'];
$allergies =$_POST['allergies'];
$bleeding_disorder =$_POST['bleeding-disorder'];
// echo $name;
// echo $dob;

$sql = "INSERT INTO donate(name, dob, gender, email, phone, province, city, occupation, blood_group, last_donation_date, disease, cardiac, allergies, bleeding_disorder) VALUES ('$name', '$dob', '$gender', '$email', '$phone', '$province', '$city', '$occupation', '$blood_group', '$last_donation_date', '$disease', '$cardiac', '$allergies', '$bleeding_disorder')";

// Execute the SQL statement
if (mysqli_query($con, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}

// Close the database connection
mysqli_close($con);
?>