<?php
include './horoscope.php';
session_start();
if(isset($_SERVER["REQUEST_METHOD"])) {
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
        if(isset($_SESSION["horoscope"])) {
            $horoscope = findHoroscope($_POST['personNr']);
            saveHoroscope($horoscope);
            echo json_encode(true);
    
        }
    } else {
        echo json_encode("Du har angett fel datum");
    } 

} else {
    echo json_encode(false);
}

