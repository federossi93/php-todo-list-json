<?php 
//simulazione server api

$tasks = [
        "Lern HTML",
        "Lern CSS",
        "Responsive design",
        "Javasript",
        "PHP",
        "Laravel",
];


//aggiunge le intestazioni indicate nella risposta HTTP.
header('Content-Type:application/json');
//encode traduce qualsiasi dato in .json
echo json_encode($tasks);

?>