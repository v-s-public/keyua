<?php

namespace App\Services;

use App\Models\Employee;

class EmployeeCheck
{
    private $modelNameSpace = 'App\Models';

    /**
     * Get employee possibilities
     *
     * @param string $employee
     * @return string
     */
    public function getPossibilities(string $employee) : string
    {
        $className = $this->getClassName($employee);

        $object = $this->getObject($className);

        if (!$this->isEmployee($object)) {
            echo "We do not have such employee type!";
        }

        return $this->preparePossibilitiesList($object);
    }

    /**
     * Check employee possibility
     *
     * @param string $employee
     * @param string $possibility
     * @return string
     */
    public function checkPossibility(string $employee, string $possibility) : string
    {
        $className = $this->getClassName($employee);

        $object = $this->getObject($className);

        if (!$this->isEmployee($object)) {
            echo "We do not have such employee type!";
        }

        $methods = $this->getClassMethods(get_class($object));

        return in_array($possibility, $methods) ? 'true' : 'false';
    }

    /**
     * Get class name with namespace
     *
     * @param string $className
     * @return string
     */
    private function getClassName(string $className) : string
    {
        $className = ucfirst(mb_strtolower(trim($className)));
        return $this->modelNameSpace . "\\" . $className;
    }

    /**
     * Get object by class name
     *
     * @param string $className
     * @return object
     */
    private function getObject(string $className) : object
    {
        try {
            return new $className;
        } catch (\Throwable $ex) {
            echo "Employee not found!";
        }
    }

    /**
     * Check given worker
     *
     * @param object $object
     * @return bool
     */
    private function isEmployee(object $object) : bool
    {
        return $object instanceof Employee;
    }

    /**
     * Prepare possibilities list
     *
     * @param Employee $employee
     * @return string
     */
    private function preparePossibilitiesList(Employee $employee) : string
    {
        $pos = null;
        $methods = $this->getClassMethods(get_class($employee));
        if (count($methods)) {
            foreach ($methods as $method) {
                $pos .= $employee->$method() . PHP_EOL;
            }
        }
        return $pos;
    }

    private function getClassMethods(string $className) : array
    {
        $methods = [];
        $ref = new \ReflectionClass($className);
        foreach ($ref->getMethods() as $method) {
            if ($method->class == $className) {
                $methods[] = $method->name;
            }
        }
        return $methods;
    }
}
