# Behat demo

[![behat][ico-behat-status]][link-github]
[![psalm][ico-psalm-status]][link-github]
[![php-cs-fixer][ico-php-cs-fixer-status]][link-github]
[![Latest Version][ico-version]][link-github]
[![License][ico-license]][link-license]
[![License][ico-stand-with-ukraine]][link-stand-with-ukraine]

[ico-behat-status]: https://github.com/slavcodev/behat-demo/workflows/behat/badge.svg
[ico-psalm-status]: https://github.com/slavcodev/behat-demo/workflows/psalm/badge.svg
[ico-php-cs-fixer-status]: https://github.com/slavcodev/behat-demo/workflows/php-cs-fixer/badge.svg
[ico-version]: https://img.shields.io/github/tag/slavcodev/behat-demo.svg?label=latest
[ico-license]: https://img.shields.io/badge/License-MIT-blue.svg
[ico-stand-with-ukraine]: https://raw.githubusercontent.com/vshymanskyy/StandWithUkraine/main/badges/StandWithUkraine.svg

[link-github]: https://github.com/slavcodev/behat-demo
[link-license]: LICENSE
[link-contributing]: .github/CONTRIBUTING.md
[link-stand-with-ukraine]: https://github.com/vshymanskyy/StandWithUkraine/blob/main/docs/README.md

Behat demo feature with context implementation.

## Usage

You need to add this feature in the features paths and register the context.

The most simple way is to add a separate suite or profile:

```yaml
# Demo profile useful to check behat works, run --profile=demo
demo:
    gherkin:
        # Override default tags if any.
        filters:
            tags: "@demo"
    suites:
        default:
            paths: [ "%paths.base%/vendor/slavcodev/behat-demo/features" ]
            contexts: [ Slavcodev\BehatDemo\DemoContext ]
```

## Links

- [Behat](https://docs.behat.org/en/latest/)
