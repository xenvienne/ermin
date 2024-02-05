<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";

$reservation = new Reservation();
$rezervacije = $reservation->dohvatiSveRezervacije();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Panorama travel</title>
    <link rel="stylesheet" href="izgledCSS/admin.css" type="text/css" />
    <link rel="stylesheet" href="izgledCSS/filter.css" type="text/css" />

    <link rel="icon" type="image/png" href="travel.png">
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

</head>

<body>
<style>
    .user-table th, .user-table td {
    border: 1px solid #ddd;
    padding: 12px;
    text-align: center;
   
}

</style>


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
            <span class="notification-icon">🔔</span>
            <span class="logout-icon" onclick="logout()">Logout</span>
        </div>
    </nav>

    <div class="user-management-container">
        <h2>User Management</h2>
        <h1>Admin Panel - Pregled rezervacija</h1>
        <table class="user-table" border="1">
            <thead>
                <tr>
                    <th>Ime</th>
                    <th>Prezime</th>
                    <th>Broj telefona</th>
                    <th>Email</th>
                    <th>Drzavljanstvo</th>
                    <th>Datum polaska</th>
                    <th>Datum dolaska</th>
                    <th>Broj gostiju</th>
                    <th>Hotel</th>
                    <th>Poruka</th>
                    <th>cijena</th> 
                    <th>Action</th> 
                </tr>
            </thead>
            <tbody>
                <?php foreach ($rezervacije as $rezervacija): ?>
                    <tr>
                        <td><?php echo $rezervacija['firstName']; ?></td>
                        <td><?php echo $rezervacija['lastName']; ?></td>
                        <td><?php echo $rezervacija['phoneNumber']; ?></td>
                        <td><?php echo $rezervacija['email']; ?></td>
                        <td><?php echo $rezervacija['drzavljanstvo']; ?></td>
                        <td><?php echo $rezervacija['departureDate']; ?></td>
                        <td><?php echo $rezervacija['arrivalDate']; ?></td>
                        <td><?php echo $rezervacija['numGuests']; ?></td>
                        <td><?php echo $rezervacija['hotel']; ?></td>
                        <td><?php echo $rezervacija['message']; ?></td>
                        <td><?php echo $rezervacija['cijena']; ?></td>
                        
                        <td>
                            <button class="modern-button" onclick="prihvatiRezervaciju(<?php echo isset($rezervacija['rezervacijaID']) ? $rezervacija['rezervacijaID'] : ''; ?>)">
                                Prihvati
                            </button>

                         
                            <button class="modern-button" data-id="3" onclick="zameniRezervaciju(3)">
    Zameni
</button> 
        
                            

                            <button class="modern-button" onclick="odbijRezervaciju(<?php echo isset($rezervacija['id_rezervacija']) ? $rezervacija['id_rezervacija'] : ''; ?>)">Odbij</button>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>





    <label for="filterInput">Filter: </label>
    <input type="text" id="filterInput" placeholder="Unesite kriterijum">
    <br><br>



















    <script>
        

    function odbijRezervaciju(rezervacijaID) {
    if (confirm('Are you sure you want to reject this reservation?')) {
        console.log("Deleting reservation with ID: " + rezervacijaID);

        $.ajax({
            type: "GET",
            url: "delete_reservation.php",
            data: { rezervacijaID: rezervacijaID },
            success: function (response) {
                console.log("Response: " + response);
                location.reload();
            },
            error: function (error) {
                console.error("Error: " + error.responseText);
            }
        });
    }
}


function zameniRezervaciju(rezervacijaID) {
   
    const buttonElement = document.querySelector(`button[data-id="${rezervacijaID}"]`);

    if (buttonElement) {
     
        console.log("Button element found:", buttonElement);

        
        buttonElement.style.display = 'none';

        
        const updateForm = document.getElementById(`updateForm${rezervacijaID}`);
        if (updateForm) {
            updateForm.style.display = 'block';
        } else {
            console.error(`Update form not found for rezervacijaID: ${rezervacijaID}`);
        }
    } else {
        console.error(`Button not found with data-id: ${rezervacijaID}`);
    }
}




function submitUpdateForm(rezervacijaID) {
    
    const newDepartureDate = document.querySelector(`#updateForm${rezervacijaID} [name="newDepartureDate"]`).value;
    const newArrivalDate = document.querySelector(`#updateForm${rezervacijaID} [name="newArrivalDate"]`).value;
    const newPhoneNumber = document.querySelector(`#updateForm${rezervacijaID} [name="newPhoneNumber"]`).value;

    console.log("New Departure Date:", newDepartureDate);
    console.log("New Arrival Date:", newArrivalDate);
    console.log("New Phone Number:", newPhoneNumber);

    $.ajax({
        type: "POST",
        url: "update_reservation.php",
        data: {
            rezervacijaID: rezervacijaID,
            newDepartureDate: newDepartureDate,
            newArrivalDate: newArrivalDate,
            newPhoneNumber: newPhoneNumber
        },
        success: function (response) {
            console.log("Response: " + response);
            location.reload();
        },
        error: function (error) {
            console.error("Error: " + error.responseText);
        }
    });
}
function zameniRezervaciju(rezervacijaID) {
  
    window.location.href = 'update_form.php?rezervacijaID=' + rezervacijaID;
}
function logout() {
    
    alert('Logout successful');
    
    
    window.location.href = 'index.php';
}
//novo


document.addEventListener("DOMContentLoaded", function () {
    var filterInput = document.getElementById("filterInput");
    var userTable = document.querySelector(".user-table tbody");

    filterInput.addEventListener("input", function () {
        var filterValue = filterInput.value.toLowerCase();

        
        Array.from(userTable.rows).forEach(function (row) {
            var rowText = Array.from(row.cells).map(function (cell) {
                return cell.textContent.toLowerCase();
            }).join('');

            if (rowText.includes(filterValue)) {
                row.style.display = "";
            } else {
                row.style.display = "none";
            }
        });
    });
});

document.addEventListener("DOMContentLoaded", function () {
    // ...

    filterInput.addEventListener("input", function () {
        // ...
    });
});


    </script>
    <script src="javascript/admin.js"></script>
</body>

</html>