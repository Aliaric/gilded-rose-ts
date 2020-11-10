# GildedRose by me (●'◡'●) 

## Description

Do GildedRose refactoring kata in your language/platform of choice:  
<https://github.com/emilybache/GildedRose-Refactoring-Kata>

Detailed requirements can be found here:  
https://github.com/emilybache/GildedRose-Refactoring-Kata/blob/master/GildedRoseRequirements.txt

### Special requirements:
* Application type – ​console application ​or​ a class covered with tests​.
* Algorithm correctness must be ensured by covering it with automated ​unit tests​.
* Source code should be provided in ​public repository​ (​github.com​, ​bitbucket.org​, etc.)
* Try committing early and often.
* Comment shortcuts you take when you have an idea for better implementation.
* Don't hesitate to use new language features where it makes sense.

## Known practical issues

>•	Not implemented SOLID principles
•	One of the unit tests intentionally gives an error



Requirements
------------

**PHP 7:**

This is usually bundled with your operating system, or fetchable using a package manager like `apt` or `homebrew`.

Windows users can find the latest version here: https://windows.php.net/download#php-7.3

If you want to compile from source code, that can be found here: https://www.php.net/downloads.php

**Composer:**

Composer is PHP's main package and dependency management tool.

It can be downloaded here: https://getcomposer.org/download/

Getting Started
---------------

Install the dependencies and run `vendor/bin/phpunit`:

```
composer install
vendor/bin/phpunit
```

If the "install" command does not work, try running `composer update` instead.
This will tell composer that it has permission to look for a newer version of
its dependencies.

If things are still not cooperating, you can try this extreme approach:

```
composer remove phpunit/phpunit
composer require phpunit/phpunit
```

To exercise the code outside of phpunit, for example to visually confirm that it is working,
use the `texttest_fixture` script:

```
php fixtures/texttest_fixture.php
```

Comments 
----

PHPUnit DataProviders used.
