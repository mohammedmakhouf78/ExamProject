<?php

class Model extends DB
{
    private $id;
    public function __construct($id = 0)
    {
        parent::__construct();
        $this->id = $id;
    }

    public static function all()
    {
        return self::staticSelect("*","students");
    }

    public function update($data)
    {
        return $this->updateDB($data)->where("id = " . $this->id)->excute();
    }

    public function delete()
    {
        return $this->deleteDB()->where("id = " . $this->id)->excute();
    }

    public static function create($data)
    {
        return self::createDB($data,"students");
    }
}