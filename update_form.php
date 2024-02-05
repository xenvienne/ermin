<?php

require_once "App/config/config.php";
require_once "App/classe/Reservation.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation = new Reservation();

    
    $rezervacijaID = $_POST['rezervacijaID'];
    $newDepartureDate = $_POST['newDepartureDate'];
    $newArrivalDate = $_POST['newArrivalDate'];
    $newPhoneNumber = $_POST['newPhoneNumber'];

    
    $reservation->zameniRezervaciju($rezervacijaID, $newDepartureDate, $newArrivalDate, $newPhoneNumber);

    
    header("Location: tabelaadmina.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Panorama travel - Update Form</title>
    <link rel="stylesheet" href="izgledCSS/update_form.css" type="text/css" />
    <link rel="icon" type="image/png" href="travel.png">
    
</head>
<body>


<form method="post" action="update_form.php">
   
    <label>New Departure Date:</label>
    <input type="text" name="newDepartureDate" required>
    <label>New Arrival Date:</label>
    <input type="text" name="newArrivalDate" required>
    <label>New Phone Number:</label>
    <input type="text" name="newPhoneNumber" required>
    <input type="hidden" name="rezervacijaID" value="<?php echo $_GET['rezervacijaID']; ?>">
    <button type="submit">Submit</button>
</form>

</body>
</html>


