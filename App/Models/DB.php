<?php

namespace App\Models;

abstract class DB
{
    private \mysqli|bool $conn;
    protected static string $table;
    private string $query;

    public function __construct()
    {
        $this->conn = DBConnection::connect();
    }

    public static function getTable()
    {
        if(!isset(static::$table))
        {
            $className = static::class;
            $className = strtolower($className);
            return $className . "s";
        }
        return static::$table;
    }

    public function showError()
    {
        echo mysqli_error($this->conn);
    }

    protected static function staticSelect($columns)
    {
        $query = "SELECT $columns FROM " . self::getTable();
        $result = mysqli_query(DBConnection::connect(),$query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    protected function select(string $columns) : DB
    {
        $this->query = "SELECT $columns FROM " . self::getTable();
        return $this;
    }

    protected function where($condition) : DB
    {
        $this->query .= " WHERE $condition ";
        return $this;
    }

    protected function and($condition) : DB
    {
        $this->query .= " AND $condition ";
        return $this;
    }

    protected function or($condition) : DB
    {
        $this->query .= " OR $condition ";
        return $this;
    }

    protected function get() : array
    {
        $result = mysqli_query($this->conn,$this->query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    protected static function createDB(array $data) : bool
    {
        $keys = "";
        $values = "";
        foreach($data as $key => $value)
        {
            $keys .= "`$key`,";
            $values .= "'$value',";
        }
        $keys = rtrim($keys,",");
        $values = rtrim($values,",");

        $query = "INSERT INTO ".self::getTable()." ($keys) VALUES ($values)";
        $result = mysqli_query(DBConnection::connect(),$query);
        return $result;
    }

    protected function updateDB(array $data) : DB
    {
        $myQueryData = "";
        foreach($data as $key => $value)
        {
            if(!empty($value))
            {
                $myQueryData .= "`$key` = '$value' ,";
            }
        }
        $myQueryData = rtrim($myQueryData,",");
        
        $this->query = "UPDATE ".self::getTable()." SET $myQueryData";
        return $this;
    }

    protected function deleteDB()
    {
        $this->query = "DELETE FROM " .self::getTable();
        return $this;
    }

    protected function excute()
    {
        $result = mysqli_query($this->conn,$this->query);
        return $result;
    }


}