<?php
    class Client{
        private string $_nom;
        private string $_prenom;

        public function __construct(string $nom,string $prenom){
            $this->_nom=$nom;
            $this->_prenom=$prenom;
            $this->_reservations=[];
        }

        
        public function setNom(string $nom){
            $this->_nom = $nom;
        }
         
        public function getNom(): string {
            return $this->_nom;
        }
        
        public function setPrenom(string $prenom){
            $this->_prenom = $prenom;
        }
         
        public function getPrenom(): string {
            return $this->_prenom;
        }

        public function ajouterReservation(Reservation $reservation){
            $this->_reservations[]=$reservation;
            
        }
        
        public function afficherReservationsClient(){
            $result = "Réservations de ".$this->_prenom." ".$this->_nom."<br>".count($this->_reservations)." RESERVATIONS<br>";
            $total = 0;
            foreach ($this-> _reservations as $reservation){
                $result .= "Hotel : "
                .$reservation->getHotel()->getNomHotel()." "
                .str_repeat("*", ($reservation->getHotel()->getNbEtoile()))." "
                .$reservation->getHotel()->getVille()." / Chambre : "
                .$reservation->getChambre()->getNumero()." ("
                .$reservation->getChambre()->getNbLit()." - "
                .$reservation->getChambre()->getPrix()."&euro; - Wifi: "
                .$reservation->getChambre()->getWifi().") "
                .$reservation->getPeriode()."<br>";
                $total += $reservation->getChambre()->getPrix();
            }
            return $result."Total: ".$total."&euro;";
            }
                    
    }