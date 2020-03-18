<?php

    require "include/class.php";

        $hotel1 = new Hotel;
            $hotel1->id_name(1);
            $hotel1->name('The Biltmore Hotel');
            $hotel1->stars(4);
            $hotel1->rate(500);
            $hotel1->description('The Biltmore hotel is located in the centre of Cape Town. 
                                You have accessibility to all the bars, restaurants and vibrate buzz roaming around in the atmosphere. 
                                Its the perfect spot to get your mood sky high.');
            $hotel1->img("cat.jpg");
            $hotel1->amen(['wifi', 'pool', 'parking', 'play']);


        $hotel2 = new Hotel;
            $hotel2->id_name(2);
            $hotel2->name('Bikini Bottom');
            $hotel2->stars(2);
            $hotel2->rate(700);
            $hotel2->description('Bikini Bottom is focused on giving their guests a relaxed discreet setting. 
                                From luxurious suites and comfortable living, your staying couldnt get any better. 
                                Its location is far from the suburbs and is perfect for a luxury accommodation. 
                                The most clean and modern experience of all time. ');
            $hotel2->img("car.jpg");
            $hotel2->amen(['pool', 'pets', 'camp']);


        $hotel3 = new Hotel;
            $hotel3->id_name(3);
            $hotel3->name('Queens Hotel');
            $hotel3->stars(5);
            $hotel3->rate(1200);
            $hotel3->description('Queens hotel is located on the outskirts of Cape Town. 
                                It is in the middle of a dry and deserted area. 
                                If you are looking for a comfortable place to escape the world in the wild we are perfectly suited for you and your needs. ');
            $hotel3->img("baloon.png");
            $hotel3->amen(['bar', 'play']);


        $hotel4 = new Hotel;
            $hotel4->id_name(4);
            $hotel4->name('Dare Devil Hotel');
            $hotel4->stars(4);
            $hotel4->rate(600);
            $hotel4->description('Daredevil hotel is situated at the top of the devils peak . 
                                The weather is super cool at night and warm in the mornings. 
                                Serene views and a glass ceiling pool house. 
                                It is 3km from a wellness resort so all guests are welcome to experience the most comfortable stay. ');
            $hotel4->img("baloon.png");
            $hotel4->amen(['wifi','jacuzzi']);

?>