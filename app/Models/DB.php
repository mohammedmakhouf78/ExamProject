<?php

class DB
{
    private mysqli|bool $conn;
    protected string $table;
    private string $query;

    public function __construct()
    {
        $this->conn = mysqli_connect('localhost','mohammed','123','oop');
    }

    public function select(string $columns) : DB
    {
        $this->query = "SELECT $columns FROM {$this->table} ";
        return $this;
    }

    public function where($condition) : DB
    {
        $this->query .= " WHERE $condition ";
        return $this;
    }

    public function and($condition) : DB
    {
        $this->query .= " AND $condition ";
        return $this;
    }

    public function or($condition) : DB
    {
        $this->query .= " OR $condition ";
        return $this;
    }

    public function get() : array
    {
        $result = mysqli_query($this->conn,$this->query);
        $result = mysqli_fetch_all($result, MYSQLI_ASSOC);
        return $result;
    }

    public function create(array $data) : DB
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

    public function update(array $data) : DB
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

    public function delete()
    {
        $this->query = "DELETE FROM {$this->table} ";
        return $this;
    }

    public function excute()
    {
        $result = mysqli_query($this->conn,$this->query);
        return $result;
    }


}