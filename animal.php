<?php
    class Animal {
        public $cry = "bowbow!";

        function bow() {
            echo $this->cry . PHP_EOL;
        }
    }

    class cat extends Animal{
        public $cry = "ニャーニャー";
    }
    $animal_1 = new cat;
    $animal_1->bow();
?>