<!DOCTYPE html>
<html>
 <head>
  <title>CHES Cellphone and Accessories Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--css-->
  <link href="edit-profile.css" type="text/css" rel="stylesheet" />
  <!---->

  <!--fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=Krona+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Krona+One&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Itim&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
  <!---->

  <!--icons-->
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-bold-rounded/css/uicons-bold-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-regular-straight/css/uicons-regular-straight.css'>
  <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.2.0/uicons-solid-straight/css/uicons-solid-straight.css'>
  <link href="https://fonts.googleapis.com/css2?family=Inconsolata:wght@200..900&display=swap" rel="stylesheet">
  <!---->

  <!--Web-logo-->
  <link rel="icon" href="icons/logo.svg">
  <!---->

 </head>
 <body>

  <!--header-->
  <div class="header">
   <div class="left-header">
    <i class="fi fi-rr-arrow-small-left" id="backButtonID"></i>
    <p>Edit Profile</p>
   </div>
   <div class="right-header">
    <img src="icons/logo.svg">
    <p>CHES</p>
   </div>
  </div>
  <!---->

  <!--main container-->
  <form id="editProfile" method="post" enctype="multipart/form-data">
   <div class="main-container">
    <div class="left-main">
     <img id="profilePic" src="icons/profile.png" alt="Upload Image"><br>
     <label for="inputFile">+</label>
     <input type="file" id="inputFile" name="profile-pic" accept="image/jpeg, image/png, imgage/jpg"><br>
     <button type="button" class="change-pass" id="changePassButton" name="changePass">CHANGE PASSWORD</button><br>
     <button type="submit" class="save-changes" id="saveID" name="saveChanges">SAVE CHANGES</button>
    </div>
    <div class="vertical"></div>
    <div class="right-main">
     <p>First Name</p>
     <input type="text" name="firstname" class="display-info" id="firstNameID"><br>
     <p>Last Name</p>
     <input type="text" name="lastname" class="display-info" id="lastNameID"><br>
     <p>Phone Number</p>
     <input type="text" name="phonenumber" class="display-info" id="phoneNumberID"><br>
     <p>Email</p>
     <input type="email" name="email" class="display-info" id="emailID"><br>
    </div>
   </div>
  </form>

  <!--script-->
  <script type="text/javascript" src="edit-profile.js"></script>
  <!---->

<?php
session_start();

if(isset($_SESSION['username'])) {
 $_SESSION['username'] = $username;

 $dbhost = 'localhost';
 $dbuser = 'root';
 $dbpass = '';
 $dbname = "techshopDB";
 $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

 if ($conn->connect_errno) {
  printf("Connection failed: %s\n", $conn->connect_error);
  exit();
 }

 $result = mysqli_query($conn, "SELECT * FROM client_accounts WHERE username = '$username'");

 if(mysqli_num_rows($result) > 0) {
  $userData = mysqli_fetch_assoc($result);

  $firstName = $userData['firstname'];
  $lastName = $userData['lastname'];
  $phoneNumber = $userData['phonenumber'];
  $email = $userData['email'];
  $profilePicture = $userData['profile_picture'];

  echo "<script>
   document.getElementById('firstNameID').value = '$firstName';
   document.getElementById('lastNameID').value = '$lastName';
   document.getElementById('phoneNumberID').value = '$phoneNumber';
   document.getElementById('emailID').value = '$email';
   document.getElementById('profilePic').src = '$profilePicture';
   </script>";
 } else {
   echo "Error: " . mysqli_error($conn);
 }
 mysqli_close($conn);
} else {
  echo "Session variable 'username' not set.";
}
?>
</body>
</html>