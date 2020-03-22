 
    <!doctype html>
    <html lang="en">
      <head>
        <title>Class</title>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="css/styles_hotel.css" type="text/css">  
    </head>
      <body>
      </body>
    </html>
</body>
</html>

<?php

$start_date = new DateTime($_SESSION['from']);
    $end_date = new DateTime($_SESSION['to']);
        global $diff;
        $diff = $end_date->diff($start_date)->format("%a");


    class Hotel {
        // public $days;
        public $id_name;
        public $name;
        public $price;
        public $stars;
        public $description;
        public $img;
        public $amenity = [];
        public $amen_describe = [];
        public $total_cost;

        // public function total_days($from_date, $to_date) {
        //     $start_date = new DateTime($from_date);
        //     $end_date = new DateTime($to_date);
        //     $difference = $end_date->diff($start_date)->format("%a");
        //     $this->days = $difference;
        // }

        public function amen_description(array $des) {
            $this->amen_describe[] = $des;
        }

        public function id_name($id) {
            $this->id_name = $id;
        }

        public function name($var_name) {
            $this->name = $var_name;
        }

        public function rate($var_price) {
            $this->price = $var_price;
            $this->total_cost = $var_price * $GLOBALS["diff"];
        }

        public function stars($var_stars) {
            $this->stars = $var_stars;
        }

        public function description($var_describe) {
            $this->description = $var_describe;
        }

        public function img($img_name) {
            $this->img = $img_name;
        }

        public function amen(array $amen_name) {
            $this->amenity[] = $amen_name;
        }

        public function display() {

            echo "<div class=\"wrapper margin border\">";  
            
            /*inside div*/
            echo "<div class=\"in\">"; 
            
            echo "<h1 class=\"heading\"> $this->name </h1>";
            /*Star rating*/
            echo "<p class=\"rating-txt\"><b><i>Hotel rating:</i></b> </p>";
            for ($n = 0; $n < $this->stars; ++$n) {
                echo "<img class=\"stars\" src=\"images/star2.png\"> ";
            };
            /*total cost*/
            echo "<hr/>";
            echo "<h2 class=\"cost\">Total Cost:</h2>";
            echo "<h2 class=\"price\"> R$this->price</h2>";
            echo $this->total_cost;
            echo "<hr/>";

            /*amenities*/
            foreach ($this->amenity as $array_pic => $array_pic_a) {
                foreach ($array_pic_a as $pic_key => $pic_value) {
                    echo "<div class=\"amen\">";  
                    echo "<img class=\"amenities margin\" src=\"images/icons/$pic_value.png\">";
                    echo "</div>";
                
                }
            
            }   
            foreach($this->amen_describe as $array_des => $array_des_b) {
                foreach ($array_des_b as $des_key => $des_value) {
                echo "<h2>$des_value</h2>";
                    
                }    

            };
            echo "<form action=\"booking_page.php\" method=\"post\">";
            echo "<button type=\"submit\" name=\"hotel_id\" value=\"$this->id_name\" id=\"view_more\"><span>Book</span></button>";
            echo "</form>";
            echo "</div>";
            
            /*Description under image*/
            echo "<div class=\"vl\">";
            echo "</div>";
            echo "<div class=\"des\">";
            echo "<div class=\"type\">"; 
            echo "<p class=\"description\"> $this->description</p>";
            echo "</div>";
            echo "</div>";
            /*Image*/
            echo "<img class=\"image\" src=\"$this->img\">";
            echo "</div>";    
        }

    }
?>

