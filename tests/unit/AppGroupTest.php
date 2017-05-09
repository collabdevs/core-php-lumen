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
        $grupo =  new App\Group;
        $grupo->name = "grupo de teste";
        var_dump($grupo->save());
      //  print_r($grupo);

        $grupos =  App\Group::all();
        print_r($grupos);
        die();
    }
}