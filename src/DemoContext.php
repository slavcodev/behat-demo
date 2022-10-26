<?php

declare(strict_types=1);

namespace Slavcodev\BehatDemo;

use Behat\Behat\Context\Context;
use Exception;

use function array_pad;
use function explode;
use function sprintf;

final class DemoContext implements Context
{
    private string $firstName = '';

    private string $lastName = '';

    private string $message = '';

    /**
     * @Given /^I am "([^"]*)"$/
     */
    public function setName(string $name): void
    {
        [$this->firstName, $this->lastName] = array_pad(explode(' ', $name), 2, '');
    }

    /**
     * @When /^people meet me$/
     */
    public function sayHello(): void
    {
        $this->message = "Hello, {$this->firstName}!";
    }

    /**
     * @Then /^they say "([^"]*)"$/
     */
    public function checkMessage(string $message): void
    {
        if ($this->message !== $message) {
            throw new Exception(sprintf('"%s" does not match expected "%s"', $this->message, $message));
        }
    }
}
