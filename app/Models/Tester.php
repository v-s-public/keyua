<?php

namespace App\Models;

class Tester extends Employee
{
    public function testCode()
    {
        return "code testing";
    }

    public function communicateWithManager()
    {
        return "communication with manager";
    }

    public function setTasks()
    {
        return "set tasks";
    }
}
