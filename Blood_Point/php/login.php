<?php

include 'conn.php';

// Process login form submission
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    // Check if username and password match a record in the database
    $sql = "SELECT * FROM signin WHERE email='$email' AND password='$password'";
    $result = mysqli_query($con, $sql);
  
    if (mysqli_num_rows($result) == 1) {
      // User authenticated, redirect to dashboard or home page
    //   header("Location: dashboard.php");
    echo "Succefully login...";
    //   exit();
    } else {
      // Invalid username or password, display error message
      echo "Invalid username or password";
    }
  }
  
  // Close database connection
  mysqli_close($con);
  ?>