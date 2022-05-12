<?php

include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Subject.php";
include __DIR__ . "/../../Classes/Request.php";
include __DIR__ . "/../../Classes/Redirect.php";

if(isset($_POST['name']))
{
    $request = new Request();
    
    Subject::create($request->getPost());

    Redirect::message("Subject Created successfully")->redirectDelay('/subject');
}