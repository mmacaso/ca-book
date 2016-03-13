<?php
class HelloTest extends PHPUnit_Framework_TestCase
{
    private $answer;

    public function setUp()
    {
        $this->answer = file_get_contents("/fixture/answer.dat");
    }

    public function testHello()
    {
        $this->assertEquals($this->answer, "HelloWorld");
    }
}
