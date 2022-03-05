<?php
require_once __DIR__ . '/../src/Employee.php';

class EmployeeTest extends \PHPUnit\Framework\TestCase
{
    public function testGetName() //1st test case
    {
        $employee = new Employee();
        $employee->setName('KimDahyun');
        $this->assertEquals($employee->getName(), 'KimDahyun');
    }

    public function testGetAge()
    {
        $employee = new Employee();
        $employee->setAge(24);
        $this->assertEquals($employee->getAge(), 24);
    }

    public function testFavorite_Color()
    {
        $employee = new Employee();
        $employee->setFavorite_Color('RedVelvet');
        $this->assertEquals($employee->getFavorite_Color(), 'RedVelvet');
    }

    public function testGetNameCheckString()
    {
        $employee = new Employee();
        $employee ->setName('KimDahyun');
        $this->assertIsString($employee->getName(), 'KimDahyun');
    }

    public function testGetAgeCheckInt()
    {
        $employee = new Employee();
        $employee->setAge(24);
        $this->assertIsInt($employee->getAge(), 24);
    }

    public function testGetAgeCheckNumeric()
    {
        $employee = new Employee();
        $employee->setAge(24);
        $this->assertIsNumeric($employee->getAge(), 24);
    }
    
    public function testFavorite_ColorCheckString()
    {
        $employee = new Employee();
        $employee->setFavorite_Color('RedVelvet');
        $this->assertIsString($employee->getFavorite_Color(), 'RedVelvet');
    }

    public function testGetTogetherInput()
    {
        $employee = new Employee();
        $employee->setTogetherInput('KimDahyun', 24, 'RedVelvet');
        $this->assertEquals($employee->getTogetherInput(), 'KimDahyun', 24, 'RedVelvet');
    }

}