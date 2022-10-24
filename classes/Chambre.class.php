<?php
    class Chambre{
        private int $_numero;
        private float $_prix;
        private int $_nbLit;
        private bool $_wifi;
        private bool $_etat;
        private Hotel $_hotel;

        public function __construct(int $numero,float $prix,int $nbLit,bool $wifi,bool $etat,Hotel $hotel){
            $this->_numero=$numero;
            $this->_prix=$prix;
            $this->_nbLit=$nbLit;
            $this->_wifi=$wifi;
            $this->_etat=$etat;
            $this->_hotel=$hotel;
            $this->_hotel->ajouterChambre($this);
            $this->_reservations=[];
        }

                
        public function setNumero(int $numero){
            $this->_numero = $numero;
        }
         
        public function getNumero(): int {
            return $this->_numero;
        }
                
        public function setPrix(float $prix){
            $this->_prix = $prix;
        }
         
        public function getPrix(): float {
            return $this->_prix;
        }

        public function setNbLit(int $nbLit){
            $this->_nbLit = $nbLit;
        }
         
        public function getNbLit(): int {
            return $this->_nbLit;
        }

        public function setWifi(bool $wifi){
            $this->_wifi = $wifi;
        }
         
        public function getWifi() {
            $result = $this->_wifi;
            if($result == 1){
                return "Oui";
            }else return "Non";
        }

        public function setEtat(bool $etat){
            $this->_etat = $etat;
        }
         
        public function getEtat() {
            $result = $this->_etat;
            if($result == 1){
                return "Réservée";
            }else return "Disponible";
        }

        public function ajouterReservation(Reservation $reservation){
            $this->_reservations[]=$reservation;

        }
    }
?>