Feature: ls-plugin_dropbox-plugins
  Test base functionality of ls-plugin_dropbox

  Scenario: See meta on homepage
    Given I am on "/"
    Then the response status code should be 200