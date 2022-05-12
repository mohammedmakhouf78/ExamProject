<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Student.php";
include __DIR__ . "/../../Classes/Request.php";
include __DIR__ . "/../../Classes/Redirect.php";

if(isset($_POST['id']))
{
    $request = new Request();

    $student = new Student($request->getByKey('id'));

    $student->delete();
    
    Redirect::message("Student Deleted successfully")->redirectDelay('/student');
}