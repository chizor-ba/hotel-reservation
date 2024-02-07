<?php
include "./config.php";

// $putin = "INSERT INTO detail(username,email,password) VALUES('$username','$email','$password')";
// mysqli_query($con,$putin);
?>
<!DOCTYPE html>
<!-- Coding by CodingLab | www.codinglabweb.com-->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Registration or Sign Up form in HTML CSS | CodingLab </title>
    <link rel="stylesheet" href="style.css">
   </head>
<body>
  <div class="wrapper">
    <h2>Hotel Reservation</h2>
    <form action="./get_data.php" method="POST">
      <div class="input-box">
        <input type="text" placeholder="Enter your full name" required name="full_name">
      </div>
      <div class="input-box">
        <input type="email" placeholder="Enter your email" required name="email">
      </div>
      <div class="input-box">
        <input type="date" placeholder="Check in date" required name="check_in_date">
      </div>
      <div class="input-box">
        <input type="date" placeholder="Check out date" required name="check_out_date">
      </div>
      <div class="input-box">
        <input type="text" placeholder="Room Prefrence" required name="room_prefrence">
      </div>
      <div class="input-box">
        <input type="number" placeholder="Number of Room your" required name="number_of_room">
      </div>
      <div class="input-box">
        <input type="number" placeholder="Number of Room Occupants" required name="number_of_room_occupant">
      </div>
      <div class="input-box">
        <input type="textarea" placeholder="Special Request" required name="special_request">
      </div>
      <div class="policy">
        <input type="checkbox">
        <h3>I accept all terms & condition</h3>
      </div>
      <div class="input-box button">
        <input type="submit" name="submit" value="Register Now">
      </div>
      <div class="text">
        <h3>Already have an account? <a href="#">Login now</a></h3>
      </div>
    </form>
  </div>

</body>
</html>
