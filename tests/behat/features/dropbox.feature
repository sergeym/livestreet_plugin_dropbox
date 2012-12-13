Feature: Greeting plugin standart features BDD
  Test base functionality of LiveStreet greeting plugin standart

  Scenario: Login
    Given I am on "/"
    And I should see "Войти"
    When I fill in "email" with "admin"
    And I fill in "password" with "admin"
    And I press "Войти"
    Then I should be on "/"
    And I should see "Admin"
