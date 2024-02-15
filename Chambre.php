<?php

class Chambre{
    private string $nomChambre;
    private float $prixChambre;
    private bool $wifi;
    private int $nombreLit;
    private Hotel $hotel;
    private array $reservations;
    private bool $statutChambre;


    public function __construct(string $nomChambre, float $prixChambre, bool $wifi, int $nombreLit, Hotel $hotel ){
        $this->nomChambre = $nomChambre;
        $this->prixChambre = $prixChambre;
        $this->wifi = $wifi;
        $this->nombreLit = $nombreLit;
        $this->hotel = $hotel;
        $this->reservations = [];
        $this->hotel->addChambre($this);
        $this->statutChambre = true;
        
        
    }
    

    public function getNomChambre()
    {
        return $this->nomChambre;
    }

   
    public function setNomChambre($nomChambre)
    {
        $this->nomChambre = $nomChambre;

        return $this;
    }

    
    public function getPrixChambre()
    {
        return $this->prixChambre;
    }

    
    public function setPrixChambre($prixChambre)
    {
        $this->prixChambre = $prixChambre;

        return $this;
    }

    
    public function getWifi()
    {
        return $this->wifi;
    }

   
    public function setWifi($wifi)
    {
        $this->wifi = $wifi;

        return $this;
    }

    
    public function getNombreLit()
    {
        return $this->nombreLit;
    }
    
    
    public function setNombreLit($nombreLit)
    {
        $this->nombreLit = $nombreLit;
        
        return $this;
    }
    
    
    public function getHotel()
    {
        return $this->hotel;
    }
    
    
    public function setHotel($hotel)
    {
        $this->hotel = $hotel;
        
        return $this;
    }
    
    
    public function getReservations()
    {
        return $this->reservations;
    }
    
    
    public function setReservations($reservations)
    {
        $this->reservations = $reservations;
        
        return $this;
    }

    public function getStatutChambre()
    {
        return $this->statutChambre;
    }

    
    public function setStatutChambre($statutChambre)
    {
        $this->statutChambre = $statutChambre;

        return $this;
    }

    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
    
    public function showResaClient()
    {
        foreach($this->reservations as $resa){
            var_dump($resa);
        }
    }
    
    //methode pour afficher le statut Chambre
    public function afficherStatut(){
        if ($this->statutChambre==true) {
            return "disponible.";
        } else {
            return "Réservé";
        }
}
       
    public function coWifi(){
        // if($wifi == true){       
        //     return "Wifi : oui";               
        // }else {
        //     return "Wifi : non";
        // }
        $wifi = $this->wifi ? "wifi : oui" : "wifi : non";
        return $wifi;
    }

    public function __toString()
    {    
    $result = "Hotel: " . $this->hotel->getNomHotel(). " **** " . $this->hotel->getVille() ."/ Chambre : " . $this->nomChambre ." (".$this->nombreLit." lits - ".$this->prixChambre." € - " . $this->coWifi($this->wifi) ." " . " du " ;
        foreach ($this->reservations as $resa){
            $result = $result . $resa->getDateArrivé()->format("d-m-Y") . " au " . $resa->getDateDépart()->format("d-m-Y") . "<br>";; 
            
        }
        return $result;
    }    
    

    public function statHotel(){
        // echo "<h3>Statuts des chambres de " .$this->hotel->getNomHotel()." **** " . $this->hotel->getVille(). "</h3><br> ";
        return $this->nomChambre . " ". $this->getPrixChambre()." € - ". $this->coWifi($this->wifi)." la Chambre est ".$this->afficherStatut($this->statutChambre)."<br>";
    }
}   






// $wifi = $this->wifi ? "wifi : oui" : "wifi : non"; // ? "avec wifi" : "sans wifi" est l'opérateur ternaire(Un opérateur ternaire est un opérateur qui prend trois opérandes et est souvent utilisé comme raccourci pour les instructions conditionnelles if-else). Voila sa representation : condition ? valeur_si_vrai : valeur_si_faux