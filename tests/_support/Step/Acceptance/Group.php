<?php
namespace Step\Acceptance;

class Group extends \AcceptanceTester
{
	private $group;

    public function manipulate()
    {
        $I = $this;
    }

    /**
     * @Given i have group with name :arg1
     */
     public function iHaveGroupWithName($arg1)
     {
        return "grupo de teste" == $arg1;
     }

    /**
     * @When i call group_save
     */
     public function iCallGroup_save()
     {
        return true;
     }

    /**
     * @Then i call groups
     */
     public function iCallGroups()
     {
        return true;
     }

    /**
     * @Then Then i should see that total number groups is :arg1
     */
     public function thenIShouldSeeThatTotalNumberGroupsIs($arg1)
     {
        return 1 == $arg1;
     }

}