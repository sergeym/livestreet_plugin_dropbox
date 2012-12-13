Feature: Greeting plugin standart features BDD
  Test base functionality of LiveStreet greeting plugin standart

  Scenario: Login
    Given I am on "/"
    Then the response status code should be 200
