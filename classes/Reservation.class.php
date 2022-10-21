<?php
    class Reservation{
        private Client $_client;
        private Hotel $_hotel;
        private Chambre $_chambre;
        private string $_periode;

        public function __construct(Client $client,Hotel $hotel,Chambre $chambre,string $periode){
            $this->_client=$client;
            $this->_client->ajouterReservation($this);
            $this->_hotel=$hotel;
            $this->_hotel->ajouterReservation($this);
            $this->_chambre=$chambre;
            $this->_chambre->ajouterReservation($this);
            $this->_periode=$periode;
            $this->_hotel->addNbChambreReserve();
        }

        
        public function setClient(Client $client){
            $this->_client = $client;
        }
         
        public function getClient(): Client {
            return $this->_client;
        }

        public function setHotel(Hotel $hotel){
            $this->_hotel = $hotel;
        }
         
        public function getHotel(): Hotel {
            return $this->_hotel;
        }

        public function setChambre(Chambre $chambre){
            $this->_chambre = $chambre;

        }
         
        public function getChambre(): Chambre {
            return $this->_chambre;
        }

        public function setPeriode(string $periode){
            $this->_periode = $periode;
        }
         
        public function getPeriode(): string {
            return $this->_periode;
        }
    }
?>