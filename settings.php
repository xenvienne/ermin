<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgledCSS/settings.css" type="text/css" />

    <link rel="icon" type="image/png" href="travel.png">

</head>



<body>

    <nav>
        <ul>
       
        <li>
                <a href="admin.php">Home</a>
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


    <div class="admin-settings-container">
    <h2>Admin Settings</h2>

 

    
    <form id="imageForm" enctype="multipart/form-data">
        <h2>Change Admin Image</h2>

        
        <label for="admin_image">Admin Image:</label>
        <input type="file" name="admin_image" id="admin_image">

        <button type="button" onclick="uploadImage()">Upload Image</button>


        <form method="post" action="process_admin_settings.php" enctype="multipart/form-data">
        

        <button type="submit">Save Admin Settings</button>
    </form>
    </form>
</div>



   
</div>

  

<script>
    



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
    



    function uploadImage() {
        var formData = new FormData(document.getElementById('imageForm'));

        
        $.ajax({
            url: 'process_admin_image.php', 
            type: 'POST',
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                alert('Image uploaded successfully!');
            },
            error: function(error) {
                console.log(error);
                alert('Error uploading image.');
            }
        });
    }



    function logout() {
    
    alert('Logout successful');
    
    
    window.location.href = 'index.php';
}
</script>



<script src="javascript/admin.js"></script>
</body>
</html>




