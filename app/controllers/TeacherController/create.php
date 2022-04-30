<?php

include __DIR__ . "/../../Models/DB.php";

if(isset($_POST['email']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $db = new DB("teachers");

    $result = $db->create([
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