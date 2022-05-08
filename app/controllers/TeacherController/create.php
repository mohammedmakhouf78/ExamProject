<?php

include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Teacher.php";

if(isset($_POST['email']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $result = Teacher::create([
        'name' => $name,
        'email' => $email,
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