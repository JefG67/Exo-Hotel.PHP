<?php

class Client{
    private string $nom;
    private string $prenom;
    private array $reservations;

    public function __construct(string $nom, string $prenom){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->reservations = [];
    }
     
      
    public function getNom()
    {
        return $this->nom;
    }

    
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }


    
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }


    public function showResaClient()
    {
        foreach($this->reservations as $resa){
            echo ($resa->getChambre()->getHotel()->getNomHotel());
        }
    }

    public function __toString()
    {
        return $this->nom." " .$this->prenom;
    }

    //Méthode pour afficher les réservations d'un client
    public function afficherReservationsClient(){
        echo "<h3>Réservations de " .$this. "</h3>" 
                .count($this->reservations). " Reservation<br><br>"; 
        $result = "";
        foreach($this->reservations as $reservation){
            $result = $result . $reservation . "<br>";
        }
        return $result;
    }
    
   
    //Méthode pour afficher le prix Total des reservation
    public function afficherPrixTotal(){
        $totalPrix = 0;
        foreach($this->reservations as $reservation){
            $totalPrix = $totalPrix + $reservation->getChambre()->getPrixChambre() * $reservation->nombreDeJour();
        }
        return "Total : $totalPrix € <br/><br/>";
    }
}


    
