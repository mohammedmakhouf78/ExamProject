<?php

namespace App\Models;

class Model extends DB
{
    private $id;
    public function __construct($id = 0)
    {
        parent::__construct();
        $this->id = $id;
    }

    public function __get($name)
    {
        $model = $this->find();
        if(array_key_exists($name , $model))
        {
            $this->$name = $model[$name];
            return $this->$name;
        }
        else
        {
            $method = "get$name";
            if(method_exists($this, $method))
            {
                return $this->$method();
            }
            else
            {
                die("fuck you");
            }
        }


    }

    public function find()
    {
        return $this->select('*')->where("id = " . $this->id)->get()[0];
    }

    public static function all()
    {
        $data = self::staticSelect("*");
        $class = static::class;
        $newData = [];
        foreach($data as $model)
        {
            $newData []= new $class($model['id']);
        }
        return $newData;
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