@demo
Feature: Behat demo

  Scenario: My mood on sunny days
    Given a sunny day
    When I go out for a walk
    Then I'm happy

  Scenario: My mood on rainy days
    Given a rainy day
    When I go out for a walk
    Then I'm sleepy
