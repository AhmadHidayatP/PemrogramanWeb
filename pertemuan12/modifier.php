<?php
// membuat class animal
class Animal
{
    // deklarasi variabel
    public $name; 
    protected $age; 
    private $color;
    // membuat fungsi constructor
    public function __construct($name, $age, $color)
{
    // memasukkan nilai parameter ke dalam variabel
    $this->name = $name;
    $this->age= $age;
    $this->color = $color;
}
    // fungsi getter getName()
    public function getName()
    {
        // mengembalikan nilai name
        return $this->name;
    }
    // fungsi getter getAge()
    protected function getAge()
    {
        // mengembalikan nilai age
        return $this->age;
    }
    // fungsi getter getColor()
    private function getColor()
    {
        // mengembalikan nilai color
        return $this->color;
    }
}
// pembuatan objek animal
$animal = new Animal("Dog", 3, "Brown");
echo "Name:" .$animal->name. "<br>";
echo "Age: " .$animal->getAge(). "<br>";
echo "Color: " .$animal->getColor()."<br>";