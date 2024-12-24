<?php
require_once("common.php");
if (!isset($_SESSION['email'])) {
    header('location: index.php');
}

// Fetch user information from the database
$user_email = $_SESSION['email'];
$query = "SELECT name, contact, city, address FROM users WHERE email = '$user_email'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
$user_data = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Settings | Smiths Orchard</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
</head>

<body>
    <?php include 'header.php'; ?>
    <div class="container-fluid" id="content">
        <div class="col-lg-4 col-md-6">
            <img src="img/settings.jpg">
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6" id="settings-container">
                <h4>Update Information</h4>
                <form action="settings_script.php" method="POST">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="New Name"
                            value="<?php echo $user_data['name']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder=" Enter old Email" name="e-mail"
                            value="<?php echo $user_email; ?>" required="true" disabled>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Contact (ex. 8444844863)" maxlength="10"
                            size="10" name="contact" value="<?php echo $user_data['contact']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="City" name="city"
                            value="<?php echo $user_data['city']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Address" name="address"
                            value="<?php echo $user_data['address']; ?>" required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="old-password" placeholder="Old Password"
                            required="true">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new-password" placeholder="New Password">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="new-password1"
                            placeholder="Re-type New Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Change</button>
                    <?php if (isset($_GET['error']))
                        echo $_GET['error']; ?>
                </form>
            </div>
        </div>
    </div>
    <?php include("includes/footer.php"); ?>
</body>

</html>