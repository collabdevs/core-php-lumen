<?php
namespace Step\Acceptance;

class Group extends \AcceptanceTester
{
	private $group;
	private $todos;

    public function __construct()
    {
        $I = $this;
        $this->group = new \App\Group; 
    }

    /**
     * @Given i have group with name :arg1
     */
     public function iHaveGroupWithName($arg1)
     {
     	$this->group->name = $arg1;
     }

    /**
     * @When i call group_save
     */
     public function iCallGroup_save()
     {
     	$this->group->save();
     }

    /**
     * @Then i call groups
     */
     public function iCallGroups()
     {
     	$this->todos =  \App\Group::all();
     }

    /**
     * @Then Then i should see that total number groups is :arg1
     */
     public function thenIShouldSeeThatTotalNumberGroupsIs($arg1)
     {
        return $this->todos->count() == $arg1;
     }

}