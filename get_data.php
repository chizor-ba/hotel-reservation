<?php
include "./config.php";
if (isset($_POST['submit'])) {
   $name = $_POST['full_name'];
   $email = $_POST['email'];
   $check_in_date = $_POST['check_in_date'];
   $check_out_date = $_POST['check_out_date'];
   $room_prefrence = $_POST['room_prefrence'];
   $number_of_room = $_POST['number_of_room'];
   $number_of_room_occupant = $_POST['number_of_room_occupant'];
   $special_request = $_POST['special_request'];
    
}
$putin = "INSERT INTO hotel_reservation(full_name,email,check_in_date,check_out_date,room_prefrence,number_of_room,number_of_room_occupant,special_request) VALUES('$full_name','$email','$check_in_date','$check_out_date','$room_prefrence',$number_of_room,$number_of_room_occupant,'$special_request')";
$query = mysqli_query($con,$putin);
if ($query) {
    header("Location: ./success.php");
}
// if ( $name >= 10) {
// echo "Usernsme is more than 10"; 
// } else {
// echo "username accepted";
// }

// if($_POST['password'] != $_POST['confirmpassword']){
//      echo "Your passwords did not match.";
//       exit(); 
//     }

// $chizzy = "testimony";
//  echo strlen($chizzy);
?>