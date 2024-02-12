<?php

class Hotel{
    private string $hotel;
    private string $adresse;
    private int $codePostal;
    private string $ville;
    private array $chambres;


    public function __construct(string $hotel, string $adresse, int $codePostal, string $ville){
        $this->hotel = $hotel;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this-> ville = $ville;
        $this->chambres = [];
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

    public function getAdresse()
    {
        return $this->adresse;
    }

    
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getCodePostal()
    {
        return $this->codePostal;
    }

    
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

   
    public function getVille()
    {
        return $this->ville;
    }

    
    public function setVille($ville)
    {
        $this->ville = $ville;

        return $this;
    }

  
    public function getChambres()
    {
        return $this->chambres;
    }

   
    public function setChambres($chambres)
    {
        $this->chambres = $chambres;

        return $this;
    }
    public function addChambre(Chambres $chambre){
        $this->chambres[] = $chambre;
    }

//     public function __toString()
//     {
//         return "Hôtel " . $this->hotel . "****" . $this->adresse; 
//     }

    public function afficherInfos(){
        echo $this->hotel . "****" . $this->adresse . $this->codePostal . $this->ville;
    }



}

