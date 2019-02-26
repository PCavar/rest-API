<?php 

session_start();

# Get JSON as a string
$json_str = file_get_contents('php://input');

# Get as an object, (StdClass)
$json_obj = json_decode($json_str);


/// im trying to update horoscope so when i press update the same zodiac sign should apear,
///you first should delete the zodiac sign with delete button to be able to chose a new one.
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_SESSION["horoscope"])) {
        echo json_encode($_SESSION["horoscope"]);
    }else{
        echo json_encode("");
    }
} 