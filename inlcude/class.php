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
            echo "<div class=\"wrapper mar_pad border\">";
            echo "<h1 class=\"name\"> $this->name </h1>";
            echo "<h4 class=\"description\"> $this->description </h4>";
            echo "<h2 class=\"price\"> R$this->price</h2>";
            for ($n = 0; $n < $this->stars; ++$n) {
                echo "<img class=\"stars\" src=\"images/star.png\">";
            };
            echo "<img class=\"border\" src=\"images/$this->img\">";
            // echo "<a href=\"view_more.php\"><button> Book </button></a>";
            echo "<form action=\"view_more.php\" method=\"post\">";
            echo "<button type=\"submit\" name=\"book\" value=\"$this->id_name\" id=\"book\">book</button>";
            echo "</form>";
            echo "<form action=\"booking_page.php\" method=\"post\">";
            echo "<button type=\"submit\" name=\"hotel_id\" value=\"$this->id_name\" id=\"view_more\">View more</button>";
            echo "</form>";
            foreach ($this->amenity as $array_pic => $array_pic_a) {
                foreach ($array_pic_a as $pic_key => $pic_value) {
                echo "<img class=\"amenities mar_pad\" src=\"images/icons/$pic_value.png\">";
                }
            
            }   
            foreach($this->amen_describe as $array_des => $array_des_b) {
                foreach ($array_des_b as $des_key => $des_value) {
                echo "<h2>$des_value</h2>";
                    
                }    

            };
            echo "</div>";
                
        }

    }
?>



    
</form>