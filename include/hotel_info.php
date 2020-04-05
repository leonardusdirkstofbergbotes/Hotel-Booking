<?php

    require "include/class.php";

        $hotel1 = new Hotel; 
            $hotel1->id_name(1);
            $hotel1->name('The Biltmore Hotel');
            $hotel1->stars(4);
            $hotel1->rate(1500);
            $hotel1->description('<h1 id="title"><marquee behavior="slide" scrollamount="20" onmousedown="this.stop();" ">The Biltmore</marquee></h1>
                <p class="par">The Biltmore hotel is located in the centre of Cape Town.
                You have access to all the bars, restaurants and vibrate buzz roaming around in the atmosphere.
                Its the perfect spot to get your mood sky high. The Biltmore hotel wants its guests to feel
                accustomed to the modern tradition of the spot. The spooky setting and history will be sure to send chills
                down your spine.  </p>');
            $hotel1->img("./images/biltmore.jpg");
            $hotel1->amen(['wifi', 'bar', 'no pets allowed', 'play area', 'free tour included']);


        $hotel2 = new Hotel;
            $hotel2->id_name(2);
            $hotel2->name('Bikini Bottom');
            $hotel2->stars(5);
            $hotel2->rate(3000);
            $hotel2->description('<h1 id="title"><marquee behavior="slide" scrollamount="20" onmousedown="this.stop();" ">Bikini Bottom</marquee></h1>
                <p class="par">Bikini Bottom got its name from the mere fact that most rooms are located underwater.
                From luxurious suites and comfortable living, your stay could not  get any better.
                Its location is far from the suburbs and is perfect for luxury accommodation with an amazing oceanfront
                view. It brings a variety of services at your comfort making you feel far from home in all ways. </p>');
            $hotel2->img("./images/bikini.jpg");
            $hotel2->amen(['wifi', 'bar', 'pets allowed','pool', 'jacuzzi']);


        $hotel3 = new Hotel;
            $hotel3->id_name(3);
            $hotel3->name('Queens Hotel');
            $hotel3->stars(2);
            $hotel3->rate(500);
            $hotel3->description('<h1 id="title"><marquee behavior="slide" scrollamount="20" onmousedown="this.stop();" ">Queens</marquee></h1>
                <p class="par">Queens hotel is located on the outskirts of Cape Town.
                It is in the middle of a dry and deserted area with no interference of noise vehicles or vendors.
                If you are looking for a comfortable place to escape the world in the wild we are perfectly suited for
                your needs</p>');
            $hotel3->img("./images/queens.png");
            $hotel3->amen(['wifi', 'bar', 'play area','no pets allowed', 'free tour included']);


        $hotel4 = new Hotel;
            $hotel4->id_name(4);
            $hotel4->name('Dare Devil Hotel');
            $hotel4->stars(3);
            $hotel4->rate(700);
            $hotel4->description('<h1 id="title"><marquee behavior="slide" scrollamount="20" onmousedown="this.stop();" ">Dare Devil</marquee></h1>
                <p class="par">Daredevil hotel is situated at the top of the Devil\'s Peak.
                The weather is super cool at night and warm in the mornings as it instantly sets the mood for the day.
                Serene views that you can use to your advantage for those dazzling images including
                a glass ceiling pool house that will set the house in a monumental island experience.
                comfortable stay.</p>');
            $hotel4->img("./images/devil.jpg");
            $hotel4->amen(['limited wifi access', 'pets allowed', 'jacuzzi', 'planetarium on site','gym facilites available']);

?>