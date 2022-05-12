<?php

include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Student.php";
include __DIR__ . "/../../Classes/Request.php";
include __DIR__ . "/../../Classes/Redirect.php";

if(isset($_POST['name']))
{
    $request = new Request();
    
    Student::create($request->getPost());

    Redirect::message("Student Created successfully")->redirectDelay('/student');
}