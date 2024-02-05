<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgledCSS/admin.css" type="text/css" />

    <link rel="icon" type="image/png" href="travel.png">

</head>



<body>

    <nav>
        <ul>
            <li>
                <a href="">Home</a>
            </li>
            <li>
                <a href="tabelaadmina.php">Tables</a>
            </li>
            <li>
                <a href="settings.php">Settings </a>
            </li>
        </ul>

        <div class="admin-profile">
            <img src="adminpic.jpg" alt="Admin Avatar" class="admin-avatar">
            <span class="notification-icon" id="reservation-notification" onclick="redirectToTable()">🔔</span>

            <span class="logout-icon" onclick="logout()">Logout</span>
        </div>
    </nav>

    

    <div class="user-management-container">
    <h2>User Management</h2>
    <h1>Admin Panel</h1>
    </div>



    

  

<script>


    function logout() {
    alert('Logout successful');
    window.location.href = 'index.php';
}

function redirectToTable() {
        window.location.href = "tabelaadmina.php";
    }

setInterval(checkForNewReservations, 60000);

function checkForNewReservations() {

    const hasNewReservations = true; 
    if (hasNewReservations) {
        document.getElementById('reservation-notification').style.color = "red"; 
    }
}
    
</script>


<script src="javascript/admin.js"></script>
</body>
</html>




