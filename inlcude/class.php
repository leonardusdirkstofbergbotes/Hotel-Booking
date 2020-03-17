<?php

$start_date = new DateTime($_GET['from']);
    $end_date = new DateTime($_GET['to']);
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

        // public function total_days($from_date, $to_date) {
        //     $start_date = new DateTime($from_date);
        //     $end_date = new DateTime($to_date);
        //     $difference = $end_date->diff($start_date)->format("%a");
        //     $this->days = $difference;
        // }

        public function id_name($id) {
            $this->id_name = $id;
        }

        public function name($var_name) {
            $this->name = $var_name;
        }

        public function rate($var_price) {
            $this->price = $var_price * $GLOBALS["diff"];
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
            echo "<div class=\"\">";
            echo "<h1 class=\"\"> $this->name </h1>";
            echo "<h4 class=\"\"> $this->description </h4>";
            echo "<h2 class=\"\"> R$this->price</h2>";
            for ($n = 0; $n < $this->stars; ++$n) {
                echo "<img class=\"\" src=\"images/star.png\">";
            };
            echo "<img src=\"images/$this->img\">";
            echo "<form action=\".php\" method=\"post\">";
            echo "<button type=\"submit\" name=\"hotel_id\" value=\"$this->id_name\">View more</button>";
            echo "</form>";
            foreach ($this->amenity as $array => $array_a) {
                foreach ($array_a as $key => $value) {
                echo "<img class=\"\" src=\"images/icons/$value.png\">";
                }
            };
            echo "</div>";
                
        }

    }
?>
