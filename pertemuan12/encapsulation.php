<?php
// membuat class car
Class Car
{
    // deklarasi variabel
    private $model;
    private $color;
    // membuat fungsi constructor
    public function __construct($model, $color)
    {
    // memasukkan nilai pada variabel model dan color dari nilai pada parameter
        $this->model = $model;
        $this->color = $color;
    }
    // membuat fungsi getter getModel()
    public function getModel()
    {
        // mengembalikan nilai model
        return $this->model;
    }
    // membuat fungsi setter setColor()
    public function setColor($color)
    {
        // memasukkan nilai pada variabel color dari nilai parameter color
        $this->color = $color;
    }
    // membuat fungsi getter getModel()
    public function getColor()
    {
        // mengembalikan nilai model
        return $this->color;
    }
}
// pembuatan objek car
$car = new Car("Toyota", "Blue");
// objek memanggil fungsi getter
echo "Model: " . $car->getModel() . "<br>";
echo "Color: " . $car->getColor() . "<br>";
// objek memanggil fungsi setter dan memanggil getter
$car->setColor("Red");
echo "Updated Color: " . $car->getColor() . "<br>";

// Enkapsulasi membantu dalam pengelolaan akses sehingga 
// jika terdapat perubahan tidak akan merubah program secara keseluruhan