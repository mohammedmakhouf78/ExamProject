<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Teacher.php";
include __DIR__ . "/../../Classes/Request.php";
include __DIR__ . "/../../Classes/Redirect.php";

if(isset($_POST['id']))
{
    $request = new Request();

    $teacher = new Teacher($request->getByKey('id'));

    $teacher->delete();
    
    Redirect::message("Teacher Deleted successfully")->redirectDelay('/teacher');
}