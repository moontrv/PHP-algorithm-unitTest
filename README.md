# php-algorithm-unitTest

- Concrete implementation of 2 interfaces for 2 algorithm in PHP 7.2: anagram and max subarray.

- Complexity: max subarray O(n), anagram O(n) (can be done with sorting and comparing each character however complexity would be O(n * log(n)) )

- Code was done on VSCode with debugger enabled on MAMP server.

- Dependencies:  requires PHP 7.2 or newer for PHPUnit

- To start: composer install

- To run test cases: ./vendor/bin/phpunit --bootstrap vendor/autoload.php tests -> 14 test cases should pass.
