# Wilber Shared Migrations

A shared collection of migrations that are used for Claim Submission Portal and Data Entry that will allow for testing in both code bases. 

## Installation

You can install the package via composer:

```bash
composer require wilber/wilber-migrations
```

## Usage

``` bash
php artisan migrate
```

## Development

When needing to create new migrations for CS or Dataentry, simply create a new branch on this repo, and change your `composer.json` file to require the branch name that you created. For example, if you created a branch named `feature-add-status` you could pull this branch into your project by requiring `dev-feature-add-status` in your `composer.json` file. 

### Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.
