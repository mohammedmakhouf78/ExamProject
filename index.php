<?php





// class Animal
// {

// }

// trait Bird
// {
//     private function hello()
//     {
//         echo "hello" . $this->name;
//     }
// }

// class Eagle extends Animal
// {
//     use Bird;

//     private $name = "ahmed";

//     public function fun()
//     {
//         $this->hello();
//     }
// }

// $eagle = new Eagle();

// $eagle->fun();

// die;

// class Animal
// {
//     private $price = 150;
//     public function __toString() // run when you use the object as string
//     {
//         return "price : " . $this->price;
//     }

//     public function __invoke() // run when you use the object as funciton
//     {
        
//     }

// }

// $animal = new Animal();

// $animal(); // the __invoke will work;
// echo $animal; // the __toString will work;

// die;

// class Animal
// {
//     public $name = "ahmed";
//     public function __get($name)
//     {
//         $this->$name = "$name";
//     }
// }

// $animal = new Animal();


// echo $animal->age;
// echo $animal->name;
// echo $animal->price;

// var_dump($animal);

// die;





// //override
// class Animal
// {
//     public function hello()
//     {
//         echo "hello animal";
//     }
// }

// class Dog extends Animal
// {
//     public function hello() // this hello overrides the parent hello
//     {
//         echo "hello Dog";
//     }
// }



//class
//objects
//constructor
//destructor
//inhiritance
//method chaning
//constructor inheritance
//abstract class can't make objects out of it but can be inherited
//abstract method childeren must implement the method
//encapsulation
//setters , getters
//access modifiers public , private , protected
//class const
// $this == the current object
// self == the containing class
// static == the calling class
// parent == parent class
// override = method takes palce for another
// overwirte = variable removes the old data and replace it
// final with methods = prevents the override.
// final with classes = the class can't be inherited but can sell make objects
// polymorphism
//magic methods
//multi inheritance
//traits
//__tostring



//interfaces
//namespaces
//autoloading
//assosiation
//aggregation
//composition

include __DIR__ . "/functions/functions.php";
include __DIR__ . "/layouts/head.php";
include __DIR__ . "/layouts/nav.php";
include __DIR__ . "/layouts/header.php";


include __DIR__ . "/app/Models/DB.php";
include __DIR__ . "/app/Models/Model.php";
include __DIR__ . "/app/Models/DBConnection.php";


$URI = $_SERVER['REQUEST_URI'];


/*****  Teacher    ****** */
if($URI == "/teacher")
{
    include "./pages/teacher/index.php";
}

else if($URI == "/teacher/create")
{
    include "./pages/teacher/create.php";
}


else if($URI == "/teacher/edit")
{
    include "./pages/teacher/edit.php";
}

/*****  Student    ****** */
else if($URI == "/student")
{
    include "./pages/student/index.php";
}

else if($URI == "/student/create")
{
    include "./pages/student/create.php";
}


else if($URI == "/student/edit")
{
    include "./pages/student/edit.php";
}


/*****  Subject    ****** */
else if($URI == "/subject")
{
    include "./pages/subject/index.php";
}

else if($URI == "/subject/create")
{
    include "./pages/subject/create.php";
}


else if($URI == "/subject/edit")
{
    include "./pages/subject/edit.php";
}


include __DIR__ . "/layouts/footer.php";
