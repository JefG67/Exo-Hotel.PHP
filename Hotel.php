<?php

class Hotel{
    private string $nomHotel;
    private string $adresse;
    private string $codePostal;
    private string $ville;
    private array $chambres;
    private array $reservations;
    


    public function __construct(string $nomHotel, string $adresse, string $codePostal, string $ville,){
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
        echo "<br><h3>Réservations de l'Hôtel " . $this->nomHotel."</h3><br> ";
        $result = "";
        //si le tableau des reservation est vide 
        if(empty($this->reservations)){
            $result = "Aucune réservation<br>";
        }else{
            echo count($this->reservations). " Reservation<br><br>"; 
            foreach ($this->reservations as $reservation){
                $result = $result . $reservation->getClient()->getnom() . " " . $reservation->getClient()->getPrenom() . " chambre " . $reservation->getChambre()->getNomChambre() . " du " .$reservation->getDateArrivé()->format("d-m-Y") . " au ". $reservation->getDateDépart()->format("d-m-Y")."<br>";
            }
        }
         return $result;
    }

    // public function etatChambres() {
    //     $result = "<h4>Statuts des chambres de " . $this->nomHotel . " **** " . $this->ville ."</h4><br>";
    //     foreach($this->chambres as $chambre) {
    //         $statut = ($chambre->afficherStatut()); 
    //         $wifi = ($chambre->coWifi());
    //         $result .=  $chambre->getNomChambre()." Prix " .$chambre->getPrixChambre()." ".$wifi." " .$statut."<br>";
                            
                           
                            
    //     }
    //     return $result."</tbody></table>";
    // }
        //ajout d'un tableau HTML pour la function etatChambres()
    public function etatChambres() {
        $result = "<h4>Statuts des chambres de " . $this->nomHotel . " **** " . $this->ville ."</h4>";
        // Début du tableau marqué par la balise <table>
        $result = $result . "<table>";
        // Pour crée la partie avec les categorie du tableau chambre / prix / wifi et etat on utlise la balise <thead>
        // La balise <tr> le début d'une ligne dans le tableau.Puis <th> pour définir les titres des colonnes du tableau.
        $result = $result . "<thead>
                                <tr>  
                                    <th>Chambre</th>
                                    <th>Prix</th>
                                    <th>Wifi</th>
                                    <th>Etat</th>
                                </tr>
                            </thead>
                        <tbody>";
                        //<tbody> : Balise pour définir le corps du tableau avec notre function
        foreach($this->chambres as $chambre) {
            $statut = $chambre->afficherStatut(); 
            $wifi = ($chambre->coWifi());
            $result .= "<tr><td>" . $chambre->getNomChambre() . "</td><td>" . $chambre->getPrixChambre() . " €</td><td>" . $wifi . "</td><td>" . $statut . "</td></tr>";
        }
        // Fin du tableau av
        $result = $result ."</tbody></table>";
        return $result;
    }
    
    public function __toString()
    {
        return  "<h2>" . $this->nomHotel . " **** " . $this->ville. "</h2><br>" . $this->adresse . " " . $this->codePostal;
    }

    public function afficherInfos(){
        echo $this . "<br>" . "Nombre de chambres : " . count($this->chambres) . "<br>" . "Nombre de chambres réservées : " . count($this->reservations) . "<br>" . " Nombre de chambres dispo : " . $this->chambreDisponible() ;
    }




    
     

}
  