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

    $student = new Student($request->getByKey('id'));

    $student->update($request->except(['id']));

    Redirect::message("Student Updated successfully")->redirectDelay('/student');
}