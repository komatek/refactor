# Pair Programming Test

The User can generate Reports and send them via Email in different formats like HTML or JSON.


There is a bunch of bad practices, anti-patterns and broken SOLID principles in the given code. The objective of this test is to perform a needed refactor in order to have a maintainable, robust and understable application.

You can freely create files, classes, methods and tests. Also you can break the given code into the pieces that you consider.

## Requeriments

- PHP 5.6 or higher installed.
- Git installed.
- Composer installed.

## How to Install the Test

- `composer install`
- To run the Unit Tests `/vendor/bin/phpunit src`


## SERGI notes
- I separated the entities of Report and Formatter since they represent different concepts, precisely I created separate classes for HTML and JSON so it can be open for extension
- I renamed some functions and modified them. It might be strange seeing the function isFilled() written but not used, I renamed and left in the class since it can be useful for some other classes which are not present in this example, but in the case of the test it is not necessary since we are testing that a report can be sent correctly, not that the report is written correclty, so it could be removed.
- I separated the original test into two different tests since it is advisable to have well written and "single responsibility test" for them to be practical and useful.
- I considered creating a factory for the classes FormatedHTML and FormatedJSON but I discarded it due to not seeing the need of creating multiple instances of formatters. It can be useful if some other classes might require having a new instance of a formatter.
- I considered creating a new class containing mosst of the repeated code in the test, it might be useful to have a simple way of setting up a report and creating all the environment but I found it impractical due to the few tests present (although the test file could be largely enlarged by testing many other corner points and smells such as not filling up correctly the report, not instanciating correctly, new classes of formats, etc.)
- Of course I honestly think that the code could be refactored better but after giving some thought I think it looks quite nicely and complies with good practices. There are many decision I made of course which I am sure are debatable and I would like to hear (if possible) which parts could be written better or thought in a different way to comply better.
