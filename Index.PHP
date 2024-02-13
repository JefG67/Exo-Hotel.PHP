<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//hotels
$hotel1 = new Hotel ("Hilton", "10 route de la Gare", "67000", "Strasbourg");




// clients
$client1 = new Client ("Elon", "Musk");
$client2 = new Client ("Grosse", "Feteala");
$client3 = new client ("Keski","Cepass");



//chambres
$chambre1 = new Chambre ("C15", 45.50, true, 4, $hotel1);
$chambre2 = new Chambre ("B12", 45.50, true, 4, $hotel1);
$chambre3 = new Chambre ("C18", 80, true, 5, $hotel1);
$chambre4 = new Chambre ("D51", 70, true, 1, $hotel1);
//reservation
$reservation1 = new Reservation ("2024-10-4","2032-7-6", $chambre1, $client1);
$reservation2 = new Reservation ("2021-8-12","2025-11-2", $chambre2, $client2);
$reservation3 = new Reservation ("2014-6-7","2042-3-7", $chambre3, $client3);


echo $hotel1->afficherInfos();

// $client1->showResaClient();
// $chambre1->showResaClient();
echo $hotel1->afficherReservations();



