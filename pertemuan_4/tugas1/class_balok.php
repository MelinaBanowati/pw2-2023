<?php
		/**
		 * Task 1
		 * Buatlah class balok yang memiliki:
		 * 1. Private property panjang, lebar dan tinggi
		 * 2. Method __construct, getLuas, getKeliling dan getVolume
		 */ 

    class Balok {
        private $panjang;
        private $lebar;
        private $tinggi;
    
        public function __construct($p, $l, $t) {
		        // code..
        }
    
        public function getLuas() {
					  // code..
				}
    
        public function getKeliling() {
            // code..
        }
    
        public function getVolume() {
            // code..
        }
    }

    $balok =  new Balok(9, 7, 4,);
    echo "Luas permukaan: " . $balok->getLuas( . "<br>");
    echo "Keliling: " . $balok->getKeliling() . <br>;
    echo "Volume: " . $balok->getVolume() . "<br>";
?>