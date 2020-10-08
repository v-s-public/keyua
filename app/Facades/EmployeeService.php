<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class EmployeeService extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'employeeCheck';
    }
}
