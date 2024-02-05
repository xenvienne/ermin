<?php
require_once "App/config/config.php";
require_once "App/classe/Reservation.php";

if (isset($_GET['rezervacijaID'])) {
    $reservation = new Reservation();
    $rezervacijaID = $_GET['rezervacijaID'];

    if ($reservation->obrisiRezervaciju($rezervacijaID)) {
        echo "Reservation deleted successfully";
    } else {
        echo "Error deleting reservation";
    }
} else {
    echo "Invalid request";
}

?>
