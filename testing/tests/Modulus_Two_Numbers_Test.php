<?php
require_once __DIR__ . '/../src/Modulus_Two_Numbers.php';

class Modulus_Two_Numbers_Test extends \PHPUnit\Framework\TestCase
{
    public function testModulus()
    {
        $two_num = new Modulus_Two_Numbers (200);

        $result = $two_num->modulus(2);

        $this->assertEquals(0, $result);
    }

    public function testModulus1()
    {
        $two_num = new Modulus_Two_Numbers (47);
        $result = $two_num->modulus(2);

        $this->assertEquals(1, $result);
    }

    public function testModulus2()
    {
        $two_num = new Modulus_Two_Numbers (90);
        $result = $two_num->modulus(30);

        $this->assertEquals(0, $result);
    }

    public function testModulusWithException()
    {
        $this->expectException(InvalidArgumentException::class);

        $two_num = new Modulus_Two_Numbers (3);
        $result = $two_num->modulus(19);
    }

    public function testModulusWithException1()
    {
        $this->expectException(InvalidArgumentException::class);

        $two_num = new Modulus_Two_Numbers (10);
        $result = $two_num->modulus('Kim Dahyun');
    }
}