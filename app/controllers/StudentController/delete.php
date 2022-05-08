<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Student.php";

if(isset($_POST['id']))
{
    $id = $_POST['id'];

    $student = new Student($id);

    if($student->delete() == true)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}