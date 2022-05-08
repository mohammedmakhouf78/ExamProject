<?php

abstract class DB
{
    private mysqli|bool $conn;
    protected string $table;
    private string $query;

    public function __construct()
    {
        $this->conn = DBConnection::connect();
    }

    protected static function staticSelect($columns, $table)
    {
        $query = "SELECT $columns FROM $table";
        $result = mysqli_query(DBConnection::connect(),$query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    protected function select(string $columns) : DB
    {
        $this->query = "SELECT $columns FROM {$this->table} ";
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

    protected static function createDB(array $data,$table) : bool
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

        $query = "INSERT INTO {$table} ($keys) VALUES ($values)";
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
        
        $this->query = "UPDATE {$this->table} SET $myQueryData";
        return $this;
    }

    protected function deleteDB()
    {
        $this->query = "DELETE FROM {$this->table} ";
        return $this;
    }

    protected function excute()
    {
        $result = mysqli_query($this->conn,$this->query);
        return $result;
    }


}