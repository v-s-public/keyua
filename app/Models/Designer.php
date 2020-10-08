<?php

namespace App\Models;

class Designer extends Employee
{
    public function communicateWithManager()
    {
        return "communication with manager";
    }

    public function draw()
    {
        return "draw";
    }
}
