<?php
    class Car{
        public $name;
        public $model;
        public $color;
        public $tyre;
        public $mileage;
        public $price;

        public function __construct($NM, $MD, $CL, $TY, $ML, $PR)
        {
            $this-> name=$NM;
            $this->model=$MD;
            $this->color=$CL;
            $this->tyre=$TY;
            $this->mileage=$ML;
            $this->price=$PR;
            echo " The name of the car is " .$this->name. " , the model is ". $this->model. " " . "The color is ". $this->color.
            "The tyre is " .$this->tyre . " The Mileage is " . $this->mileage. "  the price is ". $this->price. "</br>";
        }
    }

    $carone = new Car('Toyota Camry', '2010', 'Ash', 'Replacement', 0, '5M' );
    $cartwo = new Car('Jeep Wrangler', '2014', 'Red', 'New', 0, '15.5M' );
    $carthree = new Car('Lexus RX350 F-Sport', '2022', 'Black', 'New', 0, '43M');

?>