<?
// pembuatan class car
class Car
{
    // deklarasi variabel brand
    private $brand;
    // pembuatan fungsi constructor
    public function __construct($brand)
    {
        echo "A new car is created.<br>";
        // memasukkan nilai parameter ke dalam variabel
        $this->brand = $brand;
    }
    // fungsi getter getBrand
    public function getBrand()
    {
        // mengembalikan nilai variabel brand
        return $this->brand;
    }
    // fungsi destruct()
    public function __destruct()
    {
        echo "The car is destroyed.<br>";
    }
}
// membuat objek car
$car = new Car("Toyota");
echo "Brand: " . $car->getBrand() . "<br>";
?>