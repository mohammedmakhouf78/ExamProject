<?php

abstract class DB
{
    private mysqli|bool $conn;
    protected string $table;
    private string $query;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost','mohammed','123','oop');
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

    protected function createDB(array $data) : DB
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

        $this->query = "INSERT INTO {$this->table} ($keys) VALUES ($values)";
        return $this;
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