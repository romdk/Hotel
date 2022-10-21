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

        public function ajouterReservation(Reservation $reservation){
            $this->_reservations[]=$reservation;

        }
    }
?>