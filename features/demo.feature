@demo
Feature: Behat tests
  Scenario: Run test
    Given I am "John Doe"
    When people meet me
    Then they say "Hello, John!"
