<?php
include './horoscope.php';
session_start();
if(isset($_SERVER["REQUEST_METHOD"])){
    if ($_SERVER["REQUEST_METHOD"] == 'POST') {
            
        if(isset($_SESSION["horoscope"])){
            echo json_encode(true);
        return;
    } else {
        
        if(isset($_POST["personNr"]) && isDateOk($_POST["personNr"])) {
            $horoscope = findHoroscope($_POST["personNr"]);
            saveHoroscope($horoscope);
            
            echo json_encode($_SESSION["horoscope"]);
        
        }
    }

} else {
    echo json_encode(false);
}

}
function isDateOk($date) {
    $month= substr($date, 0, 2);
    $day= substr($date, 2);    
    
    
    if($month < 1 || $month > 12 || $day < 1 || $day > 31) { 
        return false;
    } else {
        return true;
    }
}
