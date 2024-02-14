<?php

class Reservation{
    // private int $nombreChambreRes;
    private DateTime $dateArrivé;
    private DateTime $dateDépart;
    private Chambre $chambre;
    private Client $client;
    // private Hotel $hotel;  



public function __construct( string $dateArrivé, string $dateDépart, Chambre $chambre, Client $client){
    
    $this->dateArrivé = new DateTime($dateArrivé);
    $this->dateDépart = new DateTime($dateDépart);
    $this->chambre = $chambre;
    $this->client = $client;
    $this->client->addReservation($this);
    $this->chambre->addReservation($this);
    // Ajouter la réservation à l'hôtel
    $hotel = $chambre->getHotel();
    $hotel-> addReservation($this);
    // changer le statut  pour le passer de true a false dans la construct statut chambre ( disponible a reserve)
    $this->chambre->setStatutChambre(false); 


}
    
   
   
    
    public function getDateArrivé()
    {
        return $this->dateArrivé;
    }

    public function setDateArrivé($dateArrivé)
    {
        $this->dateArrivé = $dateArrivé;

        return $this;
    }

    
    public function getDateDépart()
    {
        return $this->dateDépart;
    }

    
    public function setDateDépart($dateDépart)
    {
        $this->dateDépart = $dateDépart;

        return $this;
    }

    
    public function getChambre()
    {
        return $this->chambre;
    }

    
    public function setChambre($chambre)
    {
        $this->chambre = $chambre;

        return $this;
    }

    public function getClient()
    {
        return $this->client;
    }

   
    public function setClient($client)
    {
        $this->client = $client;

        return $this;
    }

    public function __toString()
    {
        return $this->chambre;
    }
    //Méthode pour calculer le nombre de jours qu'un client passe dans l'hôtel
    public function nombreDeJour(){
        $dateArrive = $this->dateArrivé;
        $dateDepart = $this->dateDépart;
        $diffJour = $dateArrive->diff($dateDepart);
        $nombreDeJour = $diffJour->days;
            return $nombreDeJour;
    }
}