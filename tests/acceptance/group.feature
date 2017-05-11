Feature: group
  In order to manipulate groups
  As a user
  I need to create modifiy and delete group

  Scenario: create nem group
  As a user
 I need to be able to create a new group
 Given i have new_group with name "grupo de teste" 
 When i call new_group_save 
 Then  i call group_all 
 And Then i should see that total number group is 1