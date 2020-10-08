<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

abstract class Employee extends Model
{
    public function writeCode()
    {
        return false;
    }

    public function testCode()
    {
        return false;
    }

    public function communicateWithManager()
    {
        return false;
    }

    public function draw()
    {
        return false;
    }

    public function setTasks()
    {
        return false;
    }
}
