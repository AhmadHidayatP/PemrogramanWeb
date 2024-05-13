<?php
    // membuat abstract class shape
    abstract class Shape{
        abstract public function calculateArea();
    }
    // membuat class circle sebagai child dari class shape
    class Circle extends Shape{   
        // deklarasi variabel radius
        private $radius;
        // membuat constructor berparameter
        public function __construct($radius){
            // memasukkan nilai pada variabel radius dari nilai pada parameter
            $this->radius = $radius;
        }
        // membuat fungsi calculateArea()
        public function calculateArea()
        {
            // melakukan perhitungan area lingkaran
            return pi() * pow($this->radius, 2);
        }
    }
    // membuat class rectangle sebagai child dari class shape
    class Rectangle extends Shape{
        // deklarasi variabel
        private $width;
        private $height;
        // pembuatan fungsi untuk constructor berparameter
        public  function __construct($width, $height){
            // memasukkan nilai pada variabel width dan height dari nilai pada parameter
            $this->width = $width;
            $this->height = $height;
        }
        // membuat fungsi calculateArea()
        public function calculateArea()
        {
            // melakukan perhitungan area persegi panjang
            return $this->width * $this->height;
        }
    }
    // pembuatan fungsi printArea
    function printArea(Shape $shape){
        // menampilkan hasil perhitungan
        echo "The area of the shape is: " . $shape->calculateArea() . "<br>";
    }
    // pembuatan objek circle dan rectangle
    $circle = new Circle(5);
    $rectangle = new Rectangle(4, 6);
    // memanggil fungsi printarea
    printArea($circle);
    printArea($rectangle);
?>