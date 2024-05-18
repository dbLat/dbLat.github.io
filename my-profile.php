<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = "techshopDB";
$conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

if (mysqli_connect_errno()) {
    printf("Connection failed: %s\n", mysqli_connect_error());
    exit();
}

session_start();
$error = "";

if(!isset($_SESSION['username'])) {
 header("Location: index.html");
 exit(); 
}

// Fetch user information from the database based on the session username
$username = $_SESSION['username'];
$sql = "SELECT * FROM client_accounts WHERE username = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $username);
$stmt->execute();
$result = $stmt->get_result();

// Check if user exists
if ($result->num_rows > 0) {
 $row = $result->fetch_assoc();
 $first_name = htmlspecialchars($row['first_name']);
 $last_name = htmlspecialchars($row['last_name']);
 $phone_number = htmlspecialchars($row['phone_number']);
 $email = htmlspecialchars($row['email']);
 $client_img = htmlspecialchars($row['profile_picture']);
} else {
    // Handle case where user does not exist (optional)
    // You can redirect the user to a different page or display an error message
    echo "User not found!";
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>CHES Cellphone and Accessories Shop</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!--css-->
  <link href="my-profile.css" type="text/css" rel="stylesheet" />
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
  <!---->

  <!--Web-logo-->
  <link rel="icon" href="icons/logo.svg">
  <!---->
</head>
<body>
    <!-- Your HTML content with PHP variables to display user information -->
    <div class="header">
      <div class="left-header">
      <i class="fi fi-rr-arrow-small-left" id="back"></i>
      <p>My Profile</p>
     </div>
     <div class="right-header">
      <img src="icons/logo.svg">
      <p>CHES</p>
    </div>
    </div>
    <form method="post">
        <div class="main-container">
            <!-- Display user information -->
            <div class="left-main">
                <p>First Name</p>
                <div class="display-info"><span><?php echo $first_name; ?></span></div><br>
                <p>Last Name</p>
                <div class="display-info"><span><?php echo $last_name; ?></span></div><br>
                <p>Phone Number</p>
                <div class="display-info"><span><?php echo $phone_number; ?></span></div><br>
                <p>Email</p>
                <div class="display-info"><span><?php echo $email; ?></span></div><br>
            </div>
            <div class="vertical"></div>
            <!-- Right side content -->
            <div class="right-main">
            <?php if (!empty($client_img) && file_exists($client_img)) : ?>
                    <img id="uploadedImageID" src="<?php echo $client_img; ?>" alt="User Image" name="client_img"><br>
                <?php else: ?>
                    <p>No image available</p>
                <?php endif; ?>
                <button class="edit-profile" id="editProfileID">EDIT PROFILE</button><br>
                <button class="delete-account" id="deleteAccountID">DELETE ACCOUNT</button>
            </div>
        </div>
    </form>
    <!-- Include your JavaScript file -->
    <script type="text/javascript" src="my-profile.js"></script>
</body>
</html>
