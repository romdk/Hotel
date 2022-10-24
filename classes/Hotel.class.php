<?php
class Hotel
{
    private string $_nom;
    private int $_nbEtoile;
    private string $_ville;
    private string $_adresse;
    private int $_nbChambre;
    private int $_nbChambreReserve;
    private int $_nbReservation;

    public function __construct(string $nom, int $nbEtoile, string $ville, string $adresse, int $nbChambre)
    {
        $this->_nom = $nom;
        $this->_nbEtoile = $nbEtoile;
        $this->_ville = $ville;
        $this->_adresse = $adresse;
        $this->_nbChambre = $nbChambre;
        $this->_reservations = [];
        $this->_chambres = [];
        $this->_nbChambreReserve = 0;
        $this->_nbChambreDispo = $nbChambre;
        $this->_nbReservation = 0;
    }

    public function setNomHotel(string $nom)
    {
        $this->_nom = $nom;
    }

    public function getNomHotel(): string
    {
        return $this->_nom;
    }

    public function setNbEtoile(int $nbEtoile)
    {
        $this->_nbEtoile = $nbEtoile;
    }

    public function getNbEtoile(): int
    {
        return $this->_nbEtoile;
    }

    public function setVille(string $ville)
    {
        $this->_ville = $ville;
    }

    public function getVille(): string
    {
        return $this->_ville;
    }

    public function setAdresse(string $adresse)
    {
        $this->_adresse = $adresse;
    }

    public function getAdresse(): string
    {
        return $this->_adresse;
    }

    public function ajouterChambre(Chambre $chambre){
        $this->_chambres[]=$chambre;
    }

    public function setNbChambre(string $nbChambre)
    {
        $this->_nbChambre = $nbChambre;
    }

    public function getNbChambre(): int
    {
        return $this->_nbChambre;
    }

    public function addNbChambreReserve()
    {
        $this->_nbChambreReserve++;
        $this->_nbChambreDispo = $this->_nbChambre - $this->_nbChambreReserve;

    }
    public function getNbChambreReserve(): int
    {
        return $this->_nbChambreReserve;
    }
    public function nbChambreDispo(): int
    {
        return $this->_nbChambreDispo;
    }

     public function ajouterReservation(Reservation $reservation){
         $this->_reservations[]=$reservation;
         $this->_nbReservation++;
     }

     public function getNbReservation(): int
     {
        return $this->_nbReservation;
     }

    public function infosHotel()
    {
        $result = $this->getNomHotel() . " " . str_repeat("*", ($this->getNbEtoile())) . " " . $this->getVille() . "<br>" . $this->getAdresse() . "<br>" . "Nombre de chambres : " . $this->getNbChambre() . "<br>" . "Nombre de chambres reservées : " . $this->_nbChambreReserve . "<br>" . "Nombre de chambres dispo : " . $this->nbChambreDispo();
        return $result;
    }

    public function afficherReservationsHotel(){
        $result = "Réservations de l'hôtel "
        .$this->getNomHotel()." " 
        .str_repeat("*", ($this->getNbEtoile())). " " 
        .$this->getVille()."<br>"
        .$this->getNbReservation()." RESERVATIONS <br>";
        foreach ($this-> _reservations as $reservation){
        $result .= $reservation->getClient()->getPrenom()." "
        .$reservation->getClient()->getNom()." - Chambre"
        .$reservation->getChambre()->getNumero()." - "
        .$reservation->getPeriode()."<br>";
    }
    return $result;
    }

    public function afficherStatutsDesChambres(){
        $result = "Statuts des chambres de ".$this->getNomHotel()." " 
        .str_repeat("*", ($this->getNbEtoile())). " " 
        .$this->getVille()."<br>";
        foreach ($this->_chambres as $chambre){
            $result .= "Chambre ".$chambre->getChambre()->getNumero();
    }
    return $result;
    }

}
