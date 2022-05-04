<?php

//Access modifiers: public , private , protected

// class Teacher
// {
//     private $id; // read only
//     private $name; // read and write
//     private $age; // write only
//     private $salary;

//     public function __construct($id,$name,$age,$salary)
//     {
//         $this->id = $id;
//         $this->name = $name;
//         $this->age = $age;
//         $this->salary = $salary;
//     }

//     public function getId() // accessor // getter
//     {
//         return $this->id;
//     }

//     public function getName() // accessor
//     {
//         return $this->name;
//     }

//     public function setName($name) // mutator // setter
//     {
//         $this->name = $name;
//     }

//     public function setAge($age)
//     {
//         $this->age = $age + 1;
//     }

//     public function sayHello()
//     {
//         echo "hello " . $this->name . "<br>";
//     }
// }

// class Card extends Teacher
// {
//     protected $name;
//     public function sayHi()
//     {
//         echo "hello from card " . $this->name . "<br>";
//     }
// }

// $x = new Teacher(10,"ahmed",30,3000);
// var_dump($x->getId());


// // $y = new Card();
// // $y->sayHi();







// die;
// var_dump($_SERVER);
$URI = $_SERVER['REQUEST_URI'];



include __DIR__ . "/functions/functions.php";
include __DIR__ . "/layouts/head.php";
include __DIR__ . "/layouts/nav.php";
include __DIR__ . "/layouts/header.php";


if($URI == "/teacher")
{
    include "./pages/teacher/index.php";
}
else if($URI == "/student")
{
    include "./pages/student/index.php";
}
else if($URI == "/teacher/create")
{
    include "./pages/teacher/create.php";
}
else if($URI == "/teacher/edit")
{
    include "./pages/teacher/edit.php";
}



include __DIR__ . "/layouts/footer.php";
