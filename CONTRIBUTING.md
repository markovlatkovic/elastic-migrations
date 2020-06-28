## Workflow

* Fork the project and clone it locally
* Create a new branch for every new feature or a bug fix
* Do the necessary code changes
* Cover the new or fixed code with tests
* Write a comprehensive commit message in a format `Add the xxx feature` or `Fix the xxx bug`
* Push to the forked repository
* Create a Pull Request to the master branch of the project repository
* Make a new commit with a fix if one or more status checks fail (tests, code style, etc.)

## Pull Request Requirements

* Follow [PSR-2 coding style standard](https://www.php-fig.org/psr/psr-2/)
* Add tests
* Document every new feature or an interface change in the README file
* Make one Pull Request per feature / bug fix

## Running the Test Suite

To run tests locally you will need PHP (7.2 or higher), [Composer](https://getcomposer.org/download/) and [SQLite 3](https://www.sqlite.org/download.html).

Install the project dependencies:
```
composer install
```

Run the test suite:
```
bin/phpunit --testdox
```
