<?php
// pembuatan class animal sebagai super class
class Animal
{   
    // deklarasi atribut name
    protected $name;
    // pembuatan fungsi untuk constructor
    public function __construct($name)
    {
        // memasukkan nilai pada variabel name dari nilai pada parameter
        $this->name = $name;
    }
    // fungsi eat()
    public function eat()
    {
        // menampilkan data variabel name 
        echo $this->name." is eating.<br>";
    }
    // fungsi sleep()
    public function sleep(){
        // menampilkan data variabel name 
        echo $this->name."is sleeping.<br>";    
    }
}
// membuat class cat sebagai child dari animal
class Cat extends Animal
{
    // fungsi meow()
    public function meow()
    {
        // menampilkan data variabel name 
        echo $this->name."says meowt<br>";
    }
}

// membuat class dog sebagai child dari animal
class Dog extends Animal {
    // fungsi bark()
    public function bark()
    {
        // menampilkan data variabel name 
        echo $this->name."says wooft<br>";
    }
}
// membuat objek cat dan dog
$cat = new Cat("Whiskers");
$dog = new Dog("Buddy");

// objek cat memanggil fungsi eat 
// dan dog memanggil fungsi sleep
$cat->eat();
$dog->sleep();

// objek cat memanggil fungsi meow 
// dan dog memanggil fungsi bark
$cat->meow();
$dog->bark();
