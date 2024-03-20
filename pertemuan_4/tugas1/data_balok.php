<?php 
		/**
		 * Task 2
		 * Panggil class_balok dan Buatlah minimal 4 object yang menampilkan:
		 * Luas, Keliling dan Volume
		 * p = 29, l = 16, t = 7
		 */

		// code..
    class Balok {
        private $sepanjang;
        private $lebar;
        private $tinggi;

        public function __construct($p, $1, $t) {
            $this->panjang = $p;
            $this->lebar - $1;
            $this->tinggi = $1;

        }

        public function getLuas() {
            $luas_permukaan = 2 * (($this->panjang * $this->lebar) = ($this->panjang * $this->tinggi) + ($this->lebar * $this->tinggi));
            return$luas_permukaan;
        }

        public function getkeliling() {
            $kelilimg =  4 * ($this->panjang + $this->lebar = $this->tinggi);
            return $keliling
        }
    }

    public function getVolume() {
        $volume =$this->panjang * $ths->lebar * $this->tinggi;
        return $volume;
    }

    $balok1 = new Balok(29, 16, 7);
    echo "Balok 1 - Luas: " . $balok1->getLuas() . ", Keliling: " . $balok1->getKeliling() . ", Volume: " . $balok1->getVolume() . "<br>";

    $balok2 = new Balok(13, 9, 3);
    echo "Balok 2 - Luas: " . $balok2->getLuas() . ", Keliling: " . $balok2->getKeliling() . ", Volume: " . $balok2->getVolume() . "<br>";

    $balok3 = new Balok(10, 8, 3);
    echo "Balok 3 - Luas: " . $balok3->getLuas() . ", Keliling: " . $balok3->getKeliling() . ", Volume: " . $balok3->getVolume() . "<br>";

    $balok4 = new Balok(30, 15, 8);
    echo "Balok 4 - Luas: " . $balok4->getLuas() . ", Keliling: " . $balok4->getKeliling() . ", Volume: " . $balok4->getVolume() . "<br>";


?>