<?php

namespace App\Classes;

class Redirect
{
    public static function message($message)
    {
        echo "<h1 style='color:green'>$message</h1>" . "<br>";
        return new self();
    }

    public static function redirect($path)
    {
        header('location:' . $path);
    }

    public static function redirectDelay($path,$time = 1)
    {
        header( "refresh:$time; url=$path" );
    }
}