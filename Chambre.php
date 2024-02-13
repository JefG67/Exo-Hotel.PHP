<?php

class Chambre{
    private string $nomChambre;
    private float $prixChambre;
    private bool $wifi;
    private int $nombreLit;
    private Hotel $hotel;
    private array $reservations;


    public function __construct(string $nomChambre, float $prixChambre, bool $wifi, int $nombreLit, Hotel $hotel){
        $this->nomChambre = $nomChambre;
        $this->prixChambre = $prixChambre;
        $this->wifi = $wifi;
        $this->nombreLit = $nombreLit;
        $this->hotel = $hotel;
        $this->reservations = [];
        $this->hotel->addChambre($this);
        
        
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
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }

    public function showResaClient()
    {
        foreach($this->reservations as $resa){
            var_dump($resa);
        }
    }

    public function __toString()
{    $wifi = $this->wifi;
    return $this->nomChambre ." (".$this->nombreLit." lits - ".$this->prixChambre." € -  $wifi)";
}


    public function afficherInfos(){
    
}
}