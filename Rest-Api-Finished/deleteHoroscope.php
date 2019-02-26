<?php

session_start();
if($_SERVER["REQUEST_METHOD"] == 'DELETE'){
    
    if($_SESSION["horoscope"]){

        unset($_SESSION["horoscope"]);
        echo json_encode(true);
        return;
    }
    else{
        echo json_encode(array("status" => false, "errorMessage" => "Missing input data"));
        return;
    }
    
}
echo json_encode(array("status" => false, "errorMessage" => "Wrong request method"));

//More clean code and easier to understand.
/* switch ($_SERVER['REQUEST_METHOD']) {
    case 'DELETE':
        delete();
        break;
}
 */