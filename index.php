<?php
//class
//objects
//this
//constructor
//destructor
//inhiritance
//method chaning
//static
//parent
//slef
//constructor inheritance
//abstract class
//abstract function
//encapsulation
//setters , getters
//access modifiers public , private , protected
//class const



//polymorphism
//override
//overload
//final
//__tostring
//interfaces
//namespaces
//autoloading
//traits
//multi inheritance
//magic methods
//assosiation
//aggregation
//composition
//design patterns
//singletorn
//factory
//exception handling
include __DIR__ . "/functions/functions.php";
include __DIR__ . "/layouts/head.php";
include __DIR__ . "/layouts/nav.php";
include __DIR__ . "/layouts/header.php";


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


include __DIR__ . "/layouts/footer.php";
