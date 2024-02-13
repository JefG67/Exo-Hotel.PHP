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
}


    
