<?php
// membuat interface shape
    interface Shape{
        // membuat fungsi calculateArea()
        public function calculateArea();
    }
    // membuat class circle mengimplementasi class shape
    class Circle implements Shape{   
        // deklarasi variabel radius
        private $radius;
            // pembuatan fungsi untuk constructor berparameter
        public function __construct($radius){
            // memasukkan nilai pada variabel radius dari nilai pada parameter
            $this->radius = $radius;
        }
        // fungsi calculateArea()
        public function calculateArea()
        {
            // melakukan perhitungan untuk menghitung area lingkaran
            return pi() * pow($this->radius, 2);
        }
    }
    // membuat class rectangle mengimplementasi class shape
    class Rectangle implements Shape{
        // deklarasi variabel
        private $width;
        private $height;
        // pembuatan fungsi untuk constructor berparameter
        public  function __construct($width, $height){
        // memasukkan nilai pada variabel width dan height dari nilai pada parameter
            $this->width = $width;
            $this->height = $height;
        }
        // pembuatan fungsi calculate area
        public function calculateArea()
        {
         // melakukan perhitungan untuk menghitung area persegi panjang
            return $this->width * $this->height;
        }
    }
    // fungsi printArea()
    function printArea(Shape $shape){
        //menampilkan hasil dari perhitungan
        echo "The area of the shape is: " . $shape->calculateArea() . "<br>";
    }
    // membuat objek circle dan rectangle dengan nilainya
    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);

    //memanggil fungsi printArea untuk menampilkan hasil dari perhitungan
    printArea($circle);
    printArea($rectangle);
?>
<?
// Melalui interface, objek dapat memanggil metode dari class yang berbeda