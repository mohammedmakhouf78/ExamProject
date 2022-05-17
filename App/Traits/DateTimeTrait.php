<?php

namespace App\Traits;

use DateTime;

trait DateTimeTrait
{
    public function getAge()
    {
        $age = DateTime::createFromFormat('Y-m-d', $this->birthday)
            ->diff(new DateTime('now'))->y;
        return $age;
    }
}