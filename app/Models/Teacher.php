<?php

class Teacher extends DB
{
    public string $table = "teachers";

    private $id;
    public function __construct($id = 0)
    {
        parent::__construct();
        $this->id = $id;
    }

    public function all()
    {
        return $this->select("*")->get();
    }

    public function update($data)
    {
        return $this->updateDB($data)->where("id = " . $this->id)->excute();
    }

    public function delete()
    {
        return $this->deleteDB()->where("id = " . $this->id)->excute();
    }

    public function create($data)
    {
        return $this->createDB($data)->excute();
    }
}