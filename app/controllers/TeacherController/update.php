<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/Teacher.php";

if(isset($_POST['email']))
{
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $birthday = $_POST['birthday'];

    $teacher = new Teacher($id);

    $result = $teacher->update([
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