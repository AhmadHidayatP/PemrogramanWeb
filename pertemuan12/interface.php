<?php
// pembuatan interface shape
     interface Shape{
        // fungsi calculateArea
        public function calculateArea();
    }
    // pembuatan interface Color
    interface Color{
        //fungsi getter getColor()
        public function getColor();
    }
   // membuat class circle yang mengimplementasi interface shape dan color
    class Circle implements Shape, Color{   
        // deklarasi variabel radius ,color
        private $radius;
        private $color;
        // pembuatan fungsi constructor
        public function __construct($radius, $color){
            // memasukkan nilai parameter ke dalam nilai radius dan color
            $this->radius = $radius;
            $this->color = $color;
        }
        // pembuatan fungsi calculateArea()
        public function calculateArea()
        {
            // perhitungan untuk menghitung area
            return pi() * pow($this->radius, 2);
        }
        // pembuatan fungsi getColor()
        public function getColor()
        {
            // mengambil nilai variabel color
            return $this->color;
        }
    }
    
    // membuat objek circle
    $circle = new Circle(5,"Blue");
    // menampilkan dan memanggil fungsi menggunakan objek
    echo "Area of Circle: " . $circle->calculateArea() . "<br>";
    echo "Color of Circle: " . $circle->getColor() . "<br>";
?>
