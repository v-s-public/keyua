<?php

namespace App\Services;

class EmployeeCheck
{
    public function getPossibilities(string $employee)
    {
        dd($employee);
    }

    public function checkPossibility(string $employee, string $possibility)
    {
        dd([$employee, $possibility]);
    }
}
