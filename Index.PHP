<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


$hotel1 = new Hotel ("Hilton", "10 route de la Gare", 6700, "Strasbourg");

$hotel1->afficherInfos();