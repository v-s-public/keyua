<?php

namespace App\Models;

class Programmer extends Employee
{
    public function writeCode()
    {
        return "code writing";
    }

    public function testCode()
    {
        return "code testing";
    }

    public function communicateWithManager()
    {
        return "communication with manager";
    }
}
