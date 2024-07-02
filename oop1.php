<?php
    class Person
    {
        //PROPERTIES
        private $lastname ="Olutayo";
        public $firstname="Stephen";
        protected $age=50;
        public $address="Ogbomoso";
    
        //METHODs
        public function talk(){
            return 'I am talking';
        }
        function sing(){
            return "I can sing";
        }
        function eat(){
            return "is  a eater";
        }
        function __construct()
        {
            echo "I am the constructor for class person" . "</br>";
        }
    }


    // FIRST INSTANCE
    $person_1 = new Person;
    $person_1->firstname;
    echo $person_1->address; 
    echo "</br>". $person_1->talk();
    echo "</br>". $person_1->sing();

    //SECOND INSTANCE
    $person2 = new Person;
    echo "</br>". $person2->firstname. " ". $person2->eat(). " who resides in " . $person2->address;

    
    class Human extends Person{
        public function get(){
            echo $this->age;
        }
    }
    $human = new Human('human1');
    echo "</br>". $human->get();
?>