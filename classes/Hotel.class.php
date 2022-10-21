<?php
    class Hotel{
        private string $_nom;
        private int $_nbEtoile;
        private string $_ville;
        private string $_adresse;
        private int $_nbChambre;

        public function __construct(string $nom,int $nbEtoile,string $ville,string $adresse,int $nbChambre){
            $this->_nom=$nom;
            $this->_nbEtoile=$nbEtoile;
            $this->_ville=$ville;
            $this->_adresse=$adresse;
            $this->_nbChambre=$nbChambre;
            $this->_reservations=[];
        }

        public function setNomHotel(string $nom){
            $this->_nom = $nom;
        }
         
        public function getNomHotel(): string {
            return $this->_nom;
        }
  
        public function setNbEtoile(int $nbEtoile){
            $this->_nbEtoile = $nbEtoile;
        }
         
        public function getNbEtoile(): int {
            return $this->_nbEtoile;
        }

        public function setVille(string $ville){
            $this->_ville = $ville;
        }
         
        public function getVille(): string {
            return $this->_ville;
        }
  
        public function setAdresse(string $adresse){
            $this->_adresse = $adresse;
        }
         
        public function getAdresse(): string {
            return $this->_adresse;
        }
  
        public function setNbChambre(string $nbChambre){
            $this->_nbChambre = $nbChambre;
        }
         
        public function getNbChambre(): string {
            return $this->_nbChambre;
        }

        public function ajouterReservation(Reservation $reservation){
            $this->_reservations[]=$reservation;
            
        }

        public function infosHotel(){
            $result = $this->getNom()." ".str_repeat("*",($this->getNbEtoile()))." ".$this->getVille()."<br>".$this->getAdresse()."<br>"."Nombre de chambres : ".$this->getNbChambre();
            return $result;
        }

        public function afficherReservationsHotel(){
            foreach ($this-> _reservations as $reservation){
            $result .= $reservation->getNom();
            }
        }

    }

?>