<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $rooms = $_GET["rooms"];
    $toilets = $_GET["toilets"];
    $livingRooms = $_GET["livingRooms"];
    $windows = $_GET["windows"];
    $toilettesInRoom = $_GET["toilettesInRoom"];
    $kitchenType = $_GET["kitchenType"];
    $serviceType = $_GET["serviceType"];
    $offre = $_GET["offre"];
    
    // Check if the checkbox is checked
    $pets = $_GET["pets"];

    // You can now process this data as needed (e.g., store in a database or perform calculations)
    
    // For demonstration purposes, let's just display the data
    echo "Rooms: $rooms<br>";
    echo "Toilets: $toilets<br>";
    echo "Living Rooms: $livingRooms<br>";
    echo "Windows: $windows<br>";
    echo "Toilettes in Rooms: $toilettesInRoom<br>";
    echo "Kitchen Type: $kitchenType<br>";
    echo "Service Type: $serviceType<br>";
    echo "Offre: $offre<br>";
    echo "Pets: $pets<br>";

    if(!$pets){
        echo('correct');
    }

    if($pets){
        echo('not correct');
    }
}
?>
