<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="./style.css">.
    <title>Document</title>
    <script src="./view.js"></script>

</head>
<body onload="initsight()">
    <h1> Mitt Horoskop</h1>
    
   
    <div class="container">
        <input placeholder=" Month/Day (4 siffror)" name="personNr" type="text" maxlength="4" id="add_horoscope">

        <button id="save_horoscope">
           Save
        </button>
        
        <button id="update_horoscope">
            Update
        </button>
        
        <button id="delete_horoscope">
            Delete
        </button>
    </div>

    <p id="zodiacSign"></p>
        
</body>
<script src="./horoscope.js"></script>
</html>