<?php


class AppGroupTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;

    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testMe()
    {
        $todos =  App\Group::all();
        $this->assertEquals(0 , $todos->count());
     
    }
}