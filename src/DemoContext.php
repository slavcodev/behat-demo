<?php

declare(strict_types=1);

namespace Slavcodev\BehatDemo;

use Behat\Behat\Context\Context;
use Exception;

use function sprintf;

final class DemoContext implements Context
{
    private string $weather = '';

    private string $mood = '';

    /**
     * @Given /^a ([^"]*) day$/
     */
    public function setWeather(string $kind): void
    {
        $this->weather = $kind;
    }

    /**
     * @When /^I go out for a walk$/
     */
    public function changeMood(): void
    {
        $this->mood = match ($this->weather) {
            'sunny' => 'happy',
            'rainy' => 'sleepy',
            default => 'fine',
        };
    }

    /**
     * @Then /^I'm ([^"]*)$/
     *
     * @throws Exception
     */
    public function checkMessage(string $mood): void
    {
        if ($this->mood !== $mood) {
            throw new Exception(sprintf('"%s" does not match expected "%s"', $this->mood, $mood));
        }
    }
}
