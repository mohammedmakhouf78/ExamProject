<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Student.php";

if(isset($_POST['name']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $student = new Student($id);

    $result = $student->update([
        'name' => $name,
        'phone' => $phone,
        'birthday' => $birthday
    ]);

    if($result == true)
    {
        echo "true";
    }
    else
    {
        echo "false";
    }
}