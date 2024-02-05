<?php


require_once "App/config/config.php";
require_once "App/classe/User.php";

$user = new User();
if (!$user->if_logged()) {
    header("Location: login.html");
    exit();
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$user_id = $_SESSION['user_id'];
$username = $user->getUsernameById($user_id);




    
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    

    
    if ($user->login($user->getUsernameById($user_id), $old_password)) {
       
        if ($new_password === $confirm_password) {
            
            if ($user->changePassword($user_id, $new_password)) {
              
                echo "Password changed successfully.";
                header("Location: login.php");
                exit();
            } else {
               
                echo "Error changing password.";
            }
        } else {
           
            echo "New password and confirm password do not match.";
        }
    } else {
        
        echo "Incorrect old password.";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgled.css" type="text/css" />
    <link rel="stylesheet" href="IzgledCSS/change.css"; type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-r4JSEV8OLcW2TToJ8dKFPCgAqOIFKgoLNFa6eC/7E9RHIf1Q5U6h" crossorigin="anonymous">
    <script>
        function openLoginPopup() {
            window.open('login.html', 'LoginWindow', 'width=400,height=300');
        }
    </script>
    </head>
<body class="login-body">

    <div class="container20">
        <div class="form-wrap">
            
            <form method="post" id="change-password-form" action="">
                
                <h2>Change password</h2>
                <div class="input-group">
                    <input type="password" id="old_password" name="old_password" placeholder="Old Password" required>
                </div>
                <div class="input-group">
                    <input type="password" id="new_password" name="new_password" placeholder="New Password" required>
                </div>
                <div class="input-group">
                    <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm New Password" required>
                </div>
                <div class="input-group">
                    <button type="submit" class="btn">Change Password</button>
                </div>
                <p class="signin-link">Back to Home <a href="index.php" id="signin-link">Panorama</a></p>
            </form>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.12.8/dist/umd/popper.min.js" integrity="sha384-PLACEHOLDER" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+WyJcFCQD8DST" crossorigin="anonymous"></script>
</body>
</html>
