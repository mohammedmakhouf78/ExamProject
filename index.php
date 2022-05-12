<?php

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


//overload
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
//singleton
//factory
//exception handling
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
