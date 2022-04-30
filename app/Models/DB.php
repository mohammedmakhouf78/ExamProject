<?php

//Database Wrapper
//Access Modifiers public , protected , private
//Encapsulation
class DB
{
    public mysqli|bool $conn;
    public string $table;
    public string $query;

    public function __construct(string $table)
    {
        $this->conn = mysqli_connect('localhost','mohammed','123','oop');
        $this->table = $table;
    }

    public function select(string $columns)
    {
        $this->query = "SELECT $columns FROM {$this->table} ";
        return $this;
    }

    public function where($condition)
    {
        $this->query .= " WHERE $condition ";
        return $this;
    }

    public function and($condition)
    {
        $this->query .= " AND $condition ";
        return $this;
    }

    public function or($condition)
    {
        $this->query .= " OR $condition ";
        return $this;
    }

    public function get()
    {
        $result = mysqli_query($this->conn,$this->query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    public function create(array $data) : mysqli_result | bool
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

        $query = "INSERT INTO {$this->table} ($keys) VALUES ($values)";

        $result = mysqli_query($this->conn,$query);
        return $result;
    }
    //update
    //delete
    //select
}