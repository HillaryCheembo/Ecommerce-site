<?php
require("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

// Get user input
$name = $_POST['name'];
$contact = $_POST['contact'];
$city = $_POST['city'];
$address = $_POST['address'];

// Update user information in the database
$query = "UPDATE users SET name = '$name', contact = '$contact', city = '$city', address = '$address' WHERE email = '" . $_SESSION['email'] . "'";
mysqli_query($con, $query) or die(mysqli_error($con));

// Check if new password fields are filled
if (!empty($_POST['new-password']) && !empty($_POST['new-password1'])) {
    $old_pass = $_POST['old-password'];
    $old_pass = mysqli_real_escape_string($con, $old_pass);
    $old_pass = MD5($old_pass);

    $new_pass = $_POST['new-password'];
    $new_pass = mysqli_real_escape_string($con, $new_pass);
    $new_pass = MD5($new_pass);

    $new_pass1 = $_POST['new-password1'];
    $new_pass1 = mysqli_real_escape_string($con, $new_pass1);
    $new_pass1 = MD5($new_pass1);

    $query = "SELECT password FROM users WHERE email ='" . $_SESSION['email'] . "'";
    $result = mysqli_query($con, $query) or die($mysqli_error($con));
    $row = mysqli_fetch_array($result);
    $orig_pass = $row['password'];

    if ($new_pass != $new_pass1) {
        $error = "<span class='red'>The two passwords don't match</span>";
        header('location: settings.php?error= ' . $error);
    } elseif ($old_pass != $orig_pass) {
        $error = "<span class='red'>Wrong Old Password</span>";
        header('location: settings.php?error= ' . $error);
    } else {
        $query = "UPDATE users SET password = '$new_pass' WHERE email = '" . $_SESSION['email'] . "'";
        mysqli_query($con, $query) or die($mysqli_error($con));
        $success = "<span class='green'>Password Updated</span>";
        header('location: settings.php?success= ' . $success);
    }
} else {
    $success = "<span class='green'>Information Updated</span>";
    header('location: settings.php?success= ' . $success);
}
?>