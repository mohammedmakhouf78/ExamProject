<?php


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



include __DIR__ . "/layouts/footer.php";
