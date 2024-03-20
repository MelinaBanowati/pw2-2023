<?php
    class car{
        // hal akses: public, private, protected
        // property
        public $brand;
        public $color;

        function getBrand(){
           return $this->brand;

        }
    }

    //object
    $tesla = new car();
    $supra = new car();

    //set value / setter 
    $tesla->brand = 'Tesla';
    $supra->brand ='supra';

    //echo 
    echo $tesla->getBrand();
    echo '<br>';
    echo $supra->getBrand();

?>