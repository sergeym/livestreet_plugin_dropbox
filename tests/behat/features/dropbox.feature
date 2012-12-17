Feature: ls-plugin_dropbox-plugins
  Test base functionality of ls-plugin_dropbox

    Scenario: Check homepage
        Given I am on "/"
        Then the response status code should be 200

    Scenario: Authentification
        Given I am on "/login"
        When I fill in "login" with "admin"
        And I fill in "password" with "admin"
        And I press "Login"
        Then I should be on "/"
        And I should see "Admin"
