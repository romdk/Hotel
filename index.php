<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hotel</title>
</head>
<body>
    <H1>EXERCICES POO</H1>
    <br>
    <h2>Hotel</h2>


    <?php
        require 'classes/Hotel.class.php';
        require 'classes/Reservation.class.php';
        require 'classes/Client.class.php';
        require 'classes/Chambre.class.php';

        $hotel1 = new Hotel("Hilton",4,"Strasbourg","10 route de la gare 67000 STRASBOURG",30);
        $hotel2 = new Hotel("Regent",4,"Paris","1 avenue des champs-élysées 75000 PARIS",44);

        $client1 = new Client("GIBELLO","Virgile");
        $client2 = new Client("MURMANN","Micka");

        $chambre1 = new Chambre(1,120,2,true,true,$hotel1);
        $chambre2 = new Chambre(2,250,3,true,true,$hotel1);
        $chambre3 = new Chambre(3,160,3,false,false,$hotel1);
        $chambre4 = new Chambre(1,100,2,false,true,$hotel2);
        $chambre5 = new Chambre(2,120,2,false,true,$hotel2);

        $reservation1 = new Reservation($client1,$hotel1,$chambre1,"du 01-01-2021 au 12-01-2021");
        $reservation2 = new Reservation($client2,$hotel1,$chambre2,"du 05-01-2021 au 10-01-2021");
        $reservation3 = new Reservation($client2,$hotel2,$chambre4,"du 02-01-2021 au 16-01-2021");

        echo $hotel1->infosHotel();
        echo "<br><br>";
        echo $hotel1->afficherReservationsHotel();
        echo "<br><br>";
        echo $hotel2->afficherReservationsHotel();
        echo "<br><br>";
        echo $client2->afficherReservationsClient();
        echo "<br><br>";
        echo $hotel1->afficherStatutsDesChambres();

    ?>

    <!-- faire calcul somme prix reservation par rapport au nb de nuits -->
    <!-- si chambre dans reservation etat deviens true et inversement -->
    
    
</body>
</html>