<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/Teacher.php";

if(isset($_POST['id']))
{
    $id = $_POST['id'];

    $teacher = new Teacher($id);

    if($teacher->delete() == true)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}