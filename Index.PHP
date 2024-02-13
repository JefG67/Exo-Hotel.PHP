<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//hotels
$hotel1 = new Hotel ("Hilton", "10 route de la Gare", "67000", "Strasbourg");




// clients
$client1 = new Client ("Elon", "Musk");



//chambres
$chambre1 = new Chambre ("C15", 45.50, true, 4, $hotel1);
$chambre2 = new Chambre ("B12", 45.50, true, 4, $hotel1);

//reservation
$reservation1 = new Reservation ("2024-10-4","2032-11-6",$chambre1,$client1);


echo $hotel1->afficherInfos();

// $client1->showResaClient();
// $chambre1->showResaClient();
echo $hotel1->afficherReservations();



