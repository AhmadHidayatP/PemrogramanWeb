<?php
// Pembuatan class car
class car{
    // variabel brand
    public $brand;
    // fungsi startEngine()
    public function startEngine()
    {
        echo "Engine started!";
    }
}
// instansiasi objek car1
$car1 = new Car();
// inisialisasi nilai pada brand objek car1
$car1->brand = "Toyota";

// instansiasi objek car2
$car2 = new Car();
// inisialisasi nilai pada brand objek car2
$car2->brand = "Honda";

// objek car1 memanggil fungsi startEngine()
$car1->startEngine();
// menampilkan brand pada objek car2
echo $car2->brand;