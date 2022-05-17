<?php

namespace App\Classes;

class Request
{
    private array $post;

    public function __construct()
    {
        $this->setPost();
    }

    public function setPost() : void
    {
        $this->post = $_POST;
    }

    public function getPost() : array
    {
        return $this->post;
    }

    public function getByKey(mixed $key) : mixed
    {
        return $this->post[$key];
    }

    public function getBy(array $arr) : array
    {
        $data = [];
        foreach($this->getPost() as $key => $value)
        {
            if(in_array($key,$arr))
            {
                $data[$key] = $value; 
            }
        }
        return $data;
    }

    public function except(array $arr) : array
    {
        $data = [];
        foreach($this->getPost() as $key => $value)
        {
            if(! in_array($key,$arr))
            {
                $data[$key] = $value; 
            }
        }
        return $data;
    }
}