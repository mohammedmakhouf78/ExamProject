<?php

class Teacher extends Model
{
    public function getAge()
    {
        $age = DateTime::createFromFormat('Y-m-d', $this->birthday)
            ->diff(new DateTime('now'))
            ->y;
        return $age;
    }
}
