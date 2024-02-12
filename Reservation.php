<?php

class Reservations{
    private int $nombreChambreRes;
    private string $nomHotelRes;
    private DateTime $dateArrivé;
    private DateTime $dateDépart;


public function __construct( int $nombreChambreRes, string $nomHotelRes, int $dateArrivé, int $dateDépart){
    $this->nombreChambreRes = $nombreChambreRes;
    $this->nomHotelRes = $nomHotelRes;
    $this->dateArrivé = new DateTime($dateArrivé);
    $this->dateDépart = new DateTime($dateDépart);

}
    
    public function getNombreChambreRes()
    {
        return $this->nombreChambreRes;
    }

    
    public function setNombreChambreRes($nombreChambreRes)
    {
        $this->nombreChambreRes = $nombreChambreRes;

        return $this;
    }

   
    public function getNomHotelRes()
    {
        return $this->nomHotelRes;
    }

    
    public function setNomHotelRes($nomHotelRes)
    {
        $this->nomHotelRes = $nomHotelRes;

        return $this;
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
}

