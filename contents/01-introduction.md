# Introduction

Read and practice Learning PHP 5 to supplement the materials in this course. This book will not be directly addressed, but it discusses related topics in a reasonable amount of detail with exercises to complete. Unfortunately the book proceeds at a different pace than this course and mixes multiple technologies in the web stack very early. This can make the book difficult to use in the early stages of learning PHP, but will become more useful later in the course.

PHP is a mature dynamic, weakly typed programming language with support for object-oriented programming. It is a popular language that is regarded for its ease of use, but that same ease of use has caused it to be regarded as a “toy” language. Nonetheless, PHP can be used to in enterprise environments to create high-performance web sites when discipline is applied to the code. 

Python, Ruby, and Perl are similar languages that compete for market ownership. See http://langpop.com/ for a complete chart. C and Java are highest on the chart, but are very different languages that fill a different niche. PHP makes it easy to build websites very quickly, while C and Java are better for systems and back-end programming.

## Installation
`sudo apt-get install php5 libapache2-mod-php5 php5-cli php5-curl php5-pgsql php-codesniffer php5-xdebug geany`

## Other Helpful Resources

 - http://php.net/ 
 - http://www.php.net/manual/en/ - Read thoroughly from beginning to Language Reference. The rest is mostly library reference.
 - Visit http://php.net/PUT_FUNCTION_NAME_HERE to quickly access the documentation for a function 
 - w3c Tutorial: http://www.w3schools.com/php/default.asp
 - Hacking with PHP: http://www.hackingwithphp.com/
 - http://stackoverflow.com/questions/tagged/php
 - http://blog.teamtreehouse.com/how-to-debug-in-php provides a basic introduction to debugging

## Practical Development

 - PHP has different configuration files for web usage via Apache and CLI usage. This allows different configurations to be used depending on the environment. It is also possible to set PHP configuration variables at run-time using `ini_set()`. For both environments (`/etc/php5/apache2/php.ini` and `/etc/php5/cli/php.ini`), set the following. Ensure that there is only one entry in the configuration file for the configuration parameter you're setting. If an option is listed twice, you may encounter some strange behavior. Search the file for an existing definition before adding one.
  - PHP has very weak error checking and will hide errors from you unless you configure PHP to show them. Set your error reporting level in php.ini to the highest possible value: `error_reporting = E_STRICT | E_ALL | E_NOTICE` 
  - Make sure that magic quotes is turned off
  - Set `display_errors = On`. Do not use this setting in a production environment because it may lead to security risks by exposing internal code behavior.
  - xdebug should already be installed at this point. It's a very useful extension for making PHP applications easier to debug. See http://xdebug.org/docs/display and enable `xdebug.overload_var_dump` and `xdebug.cli_color`. Add this to the respective `php.ini` files:

   ```
   [XDebug]()
   xdebug.cli_color = 1
   xdebug.overload_var_dump = 1  
   ```

  - After modifying PHP's Apache configuration, you must restart the Apache server: `sudo /etc/init.d/apache2 restart`
  - **WARNING!** These settings should not be used in a production environment. They are specifically to be used only for development purposes. Using them in a user-facing environment can expose sensitive code information to the public and turn into a security vulnerability that malicious users can exploit. Protect your server!

 - For the purposes of the training program, we will use Geany (sudo apt-get install geany) for text editing. PHPStorm, Eclipse, NetBeans, and Komodo IDE are other popular IDEs but will not be covered in this program. It is important to note that these programs are IDEs (integrated development environments), not simple text editors like Notepad.
 - The formatting, indentation, and readability of a piece of code is important. Many PHP projects and communities require PSR-2 formatting (https://github.com/php-fig/fig-standards/blob/master/accepted/PSR-2-coding-style-guide.md). php-codesniffer is a tool used to detect both formatting and coding issues. Install it and experiment with it.
 - php-cs-fixer (http://cs.sensiolabs.org/) is a tool used for automatically addressing code formatting issues. `php-cs-fixer fix someFile` should be applied to all PHP files submitted for review.
 - `php -r 'php code goes here'` is a simple and quick way to test a small piece of code. Use php -a to try the interactive shell.

## Assignments

The following assignments should be completed using the Training repository: https://github.com/CodingAvenue/Training. At this point you should already have access to the repository. Unless specified otherwise, all coding assignments should include a branch and a pull request. Code should not be merged into the master branch until requested by a mentor. The general workflow for each assignment should be as follows:

 - Setup a GitHub SSH key (https://help.github.com/articles/generating-ssh-keys/) so that you can access Git repositories hosted on GitHub.com
 - `git clone git@github.com:CodingAvenue/Training.git someCloneName` - please follow this naming convention for all branches so there are no conflicts with other trainees!
 - Edit code, add, commit, etc
 - `git push origin firstName.LastName.chapterName.assignmentX`
 - Create GitHub pull request for your branch
 - Send Pull Request URL in Jira ticket
 - When a mentor instructs you to close the ticket by responding “m/c/c,” you should close or merge your Pull Request and then close the Jira ticket

To complete the following assignments, complete the PHP Tutorial section here: http://www.w3schools.com/php/default.asp. Do not proceed to PHP Forms or other sections of the book yet.

## Exercises

### Provide code examples for the following:
 
1. Create a function with one parameters that return's value
  
  ```php
  // @exercise Simple Function
  // @proof simple-function.php
  ```
  
2. Use the assignment operator
  
  ```php
  // @exercise Assignment Operator
  ```
  
3. What operators are used for concatenation?
 
  ```php
  // @exercise Concatenation
  ```
  
4. Provide an example of string manipulation
   
  ```php
  // @exercise String Manipulation
  ```
  
5. What is the difference between single and double quotes?
  
 ```php
  // @exercise Single and Double Quotes
  ```
  
6. What is an array? Provide an example
 
 ```php
  // @exercise Array
  ```
  
7. Provide an example of a “for” loop that uses a counter
  
  ```php
  // @exercise For Loop
  ```
  
8. How do you iterate over the keys and values in an associative array?
 
  ```php
  // @exercise Associative Array
  ```
  
9. What is var_dump() used for?
  
  ```php
  // @exercise Using var_dump
  ```
  
10. Demonstrate an if-elseif-else statement
  
  ```php
  // @exercise If Else Statement
  ```
  
11. Increment variable $count by 1
  
  ```php
  // @exercise Increment
  // @proof increment.php
  
  $count = 0;
  ```
  
12. Decrement variable $count by 1
  
  ```php
  // @exercise Decrement
  // @proof decrement.php
  
  $count = 10;
  ```
  
