<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View More</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
<?php

    require "include/hotel_info.php";

    $hotel1->amen(['bar','no_pets','winery']);
    $hotel1->amen_description(['Warm temperature swimming pool', 'Unlimited fast wifi','Free round of drinks when check in',]);
    $hotel1->description('The Biltmore hotel is located in the centre of Cape Town.
                        You have accessibility to all the bars, restaurants and vibrate buzz roaming around in the atmosphere.
                        Its the perfect spot to get your mood sky high.The Biltmore hotel wants their guests to feel
                        accustomed to the modern tradition of the spot.It gives you the opportunity to meet different people
                        from abroad during a meet and greet offered by the hotel.The biltmore hotel offers a 10% discount
                        if more than four persons, so do not hesitate to increase your company or your stay');


    $hotel2->amen(['bar','farm']);
    $hotel2->amen_description(['Free strawberries bucket','Enclosed Jacuzzi for couples','High speed wifi']);
    $hotel2->description('Bikini Bottom is focused on giving their guests a relaxed discreet setting.
                    From luxurious suites and comfortable living, your staying couldnt get any better.
                    Its location is far from the suburbs and is perfect for a luxury accommodation with an amazing front
                    view.It brings a variety of services at your comfort making you feel far from home in all ways.All
                    your desires and cravings for some alone excursion time is brought to you by Bikini Bottom.
                    The most clean and modern experience of all time. ');


    $hotel3->amen(['wifi','tour','no_pets']);
    $hotel3->amen_description(['Limited wifi','24Hour playroom','Bar available if over 21']);
    $hotel3->description('Queens hotel is located on the outskirts of Cape Town.
                        It is in the middle of a dry and deserted area with no interference of noise vehicles or vendors.
                        You receive a full on tour guide and  safari  and get to experience the sunset on a top tree house in
                        the middle of the safari.If you are looking for a comfortable place to escape the world in the wild we are perfectly suited for
                        your needs');


    $hotel4->amen(['no_wifi','planet','gym']);
    $hotel4->amen_description(['Data packages available for sale','24 hour pet care','24 hour Jacuzzi',
    'Free wellness packages']);
    $hotel4->description('Daredevil hotel is situated at the top of the devils peak .
                    The weather is super cool at night and warm in the mornings as it instantly sets the mood for the day.
                    Serene views that you can use to your advantage for those dazzling images including
                    a glass ceiling pool house that will set the house in a monumental island experience.You will be
                    able to enjoy your the casuality of your stay by spending time with family and friends inside the
                    planeterium.  It is 3km from a wellness resort so all guests are welcome to experience the most
                    comfortable stay');
    switch ($_POST['hotel_id']) {
        case '1':
            $hotel1->display();
            break;
        case '2':
            $hotel2->display();
            break;
        case '3':
            $hotel3->display();
            break;
        case '4':
            $hotel4->display();
            break;
    }
?>
<script>
$('#view_more').hide();
</script>
</body>
</html>
