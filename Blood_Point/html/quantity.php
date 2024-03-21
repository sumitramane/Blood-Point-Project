<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>
  <link rel="stylesheet" href="./../css/style.css" />

  <style>
    * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    .parent {
      margin-top: 50px;
      width: 100%;
      display: flex;
      background-color:#66cc81;
    }

    .child {
      width: 50%;
      border: 2px solid #1f1e1d;
      min-height: 70vh;
      margin: 0 5px;
    }

    .child h2 {
      margin-top: 5px;
      text-align: center;
      font-size: 3rem;
      text-shadow: 2px pink;
      margin-bottom: 2rem;
    }

    .child .item {
      width: 100%;
      align-items:center;
      padding: 3%;
      font-family: 'Times New Roman';
      text-align: center;  
      font-size: 25px;
      margin: 0px, 10px;
      border-radius: 20px;
      margin-bottom: 1rem;
      background-color: antiquewhite;
    }

    .child .item:hover{
      
    }

  </style>
</head>

<body>
  <div class="banner">
    <div class="navbar">
      <img src="../images/logo.png" class="logo" />
      <ul>
        <li><a href="./../index.html">Home</a></li>
        <li><a href="about.html">About Us</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="donate.html">Donate blood</a></li>
        <li><a href="request.html">Request blood</a></li>
        <li><a href="quantity.php">Quantity</a></li>
        <li><a href="login.html">Login</a></li>
      </ul>
    </div>

    <div class="content" style="top: 40%">
      <h1>Quantity</h1>
    </div>
  </div>

  <div class="parent">
    <div class="requests child">
      <h2>Requests</h2>
      
      <?php
      include '../php/conn.php';

      $sql = "SELECT name, blood_group, city FROM request";
      $result = mysqli_query($con, $sql);

      // Check if any rows were returned
      if (mysqli_num_rows($result) > 0) {
        // Output the names in an unordered list
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='item'> <strong>" . $row["name"] . " - " . $row["city"] . "</strong> <br> <small> Blood Group - " . $row["blood_group"] . "</small> </div>";
        }
      } else {
        echo "No names found in the user table";
      }
      ?>

    </div>

    <div class="donation child">
      <h2>Donations</h2>
      <?php
      include '../php/conn.php';

      $sql = "SELECT name, blood_group, city FROM donate";
      $result = mysqli_query($con, $sql);

      // Check if any rows were returned
      if (mysqli_num_rows($result) > 0) {
        // Output the names in an unordered list
        while ($row = mysqli_fetch_assoc($result)) {
          echo "<div class='item'> <strong>" . $row["name"] . "-" . $row["city"] . "</strong> <br> <small> Blood Group - " . $row["blood_group"] . "</small> </div>";
        }
      } else {
        echo "No names found in the user table";
      }
      ?>
    </div>
  </div>

      <!-- End of the page -->
  <footer>
        <div class="data">
            <div class="slogan">
                <span>“Blood Donation Costs You Nothing,</span> But It Can Mean The World To Someone In Need.”
            </div>
            <div class="row">
                <div class="left">
                    <h2><span>HELP SAVE A LIFE</span></h2>
                    <h2>GIVE THE GIFT OF BLOOD</h2>
                    <div class="buttons">
                        <button type="button"><span></span><a href="donate.html">DONATE</a></button>
                        <button type="button"><span></span><a href="request.html">REQUEST</a></button>
                    </div>
                    <div class="empty-space">
                        <br><br>
                    </div>
                </div>
                <div class="right">
                    <img src="./../images/blood.png" alt="">
                </div>
            </div>
        </div>
        <div class="details">
            <div class="left">
                <img src="./../images/logo-transparent-png.png" alt="">
                <p>BloodPoint is a blood donation site. It is made with the vision to help people in need. To help the
                    patient’s family
                    and worrying about finding the blood, BloodPoint is made.
                </p>
            </div>
            <div class="middle">
                <h2>Quick Links</h2>
                <a href="about.html">About</a>
                <a href="donate.html">Donate</a>
                <a href="request.html">Request</a>
            </div>
            <div class="right">
                <h2>Quick Links</h2>
                <div class="name">
                    <i class="fa-solid fa-user"></i> &nbsp; BloodPoint
                </div>
                <div class="phone">
                    <i class="fa-solid fa-phone"></i> &nbsp; <a href="tel:7378578114">\7378578114</a>
                </div>
                <div class="email">
                    <i class="fa-solid fa-envelope"></i> &nbsp; <a
                        href="mailto:contact@adropforlife.org">contact@BloodPoint.org</a>
                </div>
                <div class="location">
                    <i class="fa-solid fa-location-dot"></i> &nbsp; 
                    <a href="https://www.google.com/maps/place/Kolhapur"
                        target="_blank" rel="noopener noreferrer">
                        Kolhapur, Maharashtra</a>
                </div>

            </div>
        </div>
        <hr style="width: 90%; margin: 10px;">
        <div class="copyright" style="margin: 30px;">
            <p>Copyright &copy; 2023 | BloodPoint | All rights reserved</p>
        </div>
    </footer>
</body>

</html>