<?php

    class lingkaran {
        private $jari;
        const PHI =  3.14;

        function __construct($r)
        {
            $this->jari = $r;
        }

        function getLuas() {
            return self::phi * $this->jari * $this->jari;
        }

        function getKel() {
            return 2 * self::phi * $this->jari;
        }


    }

    ?>