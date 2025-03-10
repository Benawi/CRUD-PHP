<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: index.php");
   
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body{ font: 14px sans-serif; text-align: center; }
    </style>
</head>
<body>
<div class="user-photo" style="background-color: green;">
<h1 class="my-5">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>

<p>
    <a href="resetpassword.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a>
    <a href="./oop/SearchPagewithAjax.php" class="btn btn-success ml-3">Search with AJAX</a>
</p>
</div>
<?php
include 'profilePhoto.php';
include 'SelectUser.php';
include './oop/searchPage.php';
?>

</body>
</html>
