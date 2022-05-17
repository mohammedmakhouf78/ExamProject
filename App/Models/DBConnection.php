<?php

namespace App\Models;

class DBConnection
{
    public static function connect()
    {
        return mysqli_connect('localhost','mohammed','123','oop');
    }
}