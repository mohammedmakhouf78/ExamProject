<?php

class Model extends DB
{
    private $id;
    public function __construct($id = 0)
    {
        parent::__construct();
        $this->id = $id;
    }

    public function find()
    {
        return $this->select('*')->where("id = " . $this->id)->get()[0];
    }

    public static function all()
    {
        return self::staticSelect("*");
    }

    public function update($data)
    {
        $result = $this->updateDB($data)->where("id = " . $this->id)->excute();
        if($result == false)
        {
            self::showError();
        }
    }

    public function delete()
    {
        $result = $this->deleteDB()->where("id = " . $this->id)->excute();
        if($result == false)
        {
            self::showError();
        }
    }

    public static function create($data)
    {
        $result = self::createDB($data);
        if($result == false)
        {
            self::showError();
        }
    }
}