Feature: group
  In order to manipulate groups
  As a user
  I need to create modifiy and delete group

 Scenario: create new group
 	As a user
 	I need to be able to create a new group
 	Given i have group with name "grupo de teste" 
 	When i call group_save 
 	Then  i call groups 
 	And Then i should see that total number groups is "1"