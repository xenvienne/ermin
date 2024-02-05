<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";

$reservation = new Reservation();

if (isset($_POST['rezervacijaID'])) {
    $rezervacijaID = $_POST['rezervacijaID'];
    $newDepartureDate = $_POST['newDepartureDate'];
    $newArrivalDate = $_POST['newArrivalDate'];
    $newPhoneNumber = $_POST['newPhoneNumber'];

    $reservation->zameniRezervaciju($rezervacijaID, $newDepartureDate, $newArrivalDate, $newPhoneNumber);
}
?>
