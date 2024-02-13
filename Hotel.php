<?php

class Hotel{
    private string $nomHotel;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $chambres;
    private array $reservations;


    public function __construct(string $nomHotel, string $adresse, string $codePostal, string $ville){
        $this->nomHotel = $nomHotel;
        $this->adresse = $adresse;
        $this->codePostal = $codePostal;
        $this-> ville = $ville;
        $this->chambres = [];
        $this->reservations =[];
    }

        
    public function getNomHotel()
    {
        return $this->nomHotel;
    }

  
    public function setnNomHotel($nomHotel)
    {
        $this->nomHotel = $nomHotel;

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
    public function getReservation()
    {
        return $this->reservations;
    }
    
    
    public function setReservation($reservation)
    {
        $this->reservations = $reservation;
    
        return $this;
    }

    //Méthode pour ajouter des chambres au tableau de chambres
    public function addChambre(Chambre $chambre){
        $this->chambres[] = $chambre;
    }

    //Méthode pour ajouter des réservations au tableau de réservations
    public function addReservation(Reservation $reservation){
        $this->reservations[] = $reservation;
    }
 
    //Méthode pour compter le nombre de chambres réservées
    public function afficherNbChambresReservees()
    {
        $chambreReserve =  count($this->reservations);
        return  $chambreReserve;
    }

     //Méthode pour compter le nombre de chambre dans l'hôtel
     public function afficherNbChambres()
     {
        $totalChambre = count($this->chambres);
 
         return $totalChambre;
     }

     //Méthode pour compter le nombre de chambres dispos
    public function chambreDisponible (){
        $chambreReserve = count($this->reservations);
        $totalChambre = count($this->chambres);
        $chambreDispo = $totalChambre-$chambreReserve;
        return $chambreDispo;
    }

    //Méthode pour afficher les réservations d'un hôtel
    public function afficherReservations(){
        $result = "<br><h3>Réservations de l'Hôtel " . $this->nomHotel."</h3><br> ";
        //si le tableau des reservation est vide 
        if(empty($this->reservations)){
            $result = $result . "Aucune réservation<br>";
        }else{
            echo count($this->reservations). " RESERVATION";
            foreach ($this->reservations as $reservation){
                $result = $result . $reservation->getClient()->getnom() . " " . $reservation->getClient()->getPrenom() . " chambre " . $reservation->getChambre()->getNomChambre() . " du " .$reservation->getDateArrivé()->format("d-m-Y") . " au ". $reservation->getDateDépart()->format("d-m-Y")."<br>";
            }
        }
        return $result;
    }

    

    public function __toString()
    {
        return  $this->nomHotel . " **** " . $this->adresse . " " . $this->codePostal . " " . $this->ville;
    }

    public function afficherInfos(){
        echo $this . "<br>" . "Nombre de chambres : " . count($this->chambres) . "<br>" . "Nombre de chambres réservées : " . count($this->reservations) . "<br>" . " Nombre de chambres dispo : " . $this->chambreDisponible() ;
    }




    
    
}
  