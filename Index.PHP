<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

//hotels
$hotel1 = new Hotel ("Hilton", "10 route de la Gare", "67000", "Strasbourg");
$hotel2 = new Hotel ("Regent", "20 route de la Brouette", "95000", "Paris");




// clients
$client1 = new Client ("Elon", "Musk");
$client2 = new Client ("Grosse", "Feteala");
$client3 = new client ("Keski","Cepass");



//chambres
$chambre1 = new Chambre ("C15", 45.50, false, 4, $hotel1);
$chambre2 = new Chambre ("B12", 45.50, true, 4, $hotel1);
$chambre3 = new Chambre ("C18", 80, true, 5, $hotel1);
$chambre4 = new Chambre ("D51", 70, true, 1, $hotel1);

//reservation
$reservation1 = new Reservation ("2022-10-4","2023-7-6", $chambre1, $client1);
$reservation2 = new Reservation ("2023-8-12","2023-9-15", $chambre2, $client1);        //pb sur le chambre dispo
$reservation3 = new Reservation ("2014-6-7","2042-3-7", $chambre3, $client3);
// $reservation4 = new Reservation ("2021-8-12","2025-11-2", $chambre2, $client2);


echo $hotel1->afficherInfos();
echo $hotel1->afficherReservations();
echo $hotel2->afficherReservations();
echo $client1->afficherReservationsClient();
echo $client1->afficherPrixTotal();
echo $hotel1->etatChambres();


