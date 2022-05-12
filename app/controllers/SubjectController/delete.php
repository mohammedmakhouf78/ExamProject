<?php
include __DIR__ . "/../../Models/DB.php";
include __DIR__ . "/../../Models/DBConnection.php";
include __DIR__ . "/../../Models/Model.php";
include __DIR__ . "/../../Models/Subject.php";
include __DIR__ . "/../../Classes/Request.php";
include __DIR__ . "/../../Classes/Redirect.php";

if(isset($_POST['id']))
{
    $request = new Request();

    $subject = new Subject($request->getByKey('id'));

    $subject->delete();
    
    Redirect::message("Subject Deleted successfully")->redirectDelay('/subject');
}