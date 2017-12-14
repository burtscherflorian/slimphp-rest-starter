# slimphp-REST-starter
Starter REST-Application written in PHP with the Slim 3 Framework

## Prerequisites
### PHP
- Minimum: PHP version 5.6
- Recommended: PHP version 7.1

### Composer
Composer is a dependencies manager for PHP on a per-project basis. 

Get Composer from their <a href="https://getcomposer.org/">website.</a> 
Follow the installation guide in the "Getting Started" section. For further information about 
what composer is, please read the docs on their page. 

After installation, for commands, you can use either the <i>composer.phar</i> file in the project directory - if composer not globally installed - , or you
can work directly with <i>composer</i> - if globally installed on your machine. 

Globally installed on system:
```
 > composer ... 
```
or downloaded composer.phar file
```
 > composer.phar ...
```

In the following instructions we will use <i>composer</i> globally installed!

## Installation
Once you`ve installed composer, the starter project can be downloaded over composer.


Root to the directory where you want to install the project

Install the starter project with following command:
   ```
   > composer creae-project "burtscherflorian/slimphp-rest-starter:*" [your-application-name]
   ```
   Replace [your-application-name] with the desired directory name for your new application.

Root to the directory [your-application-name] and run composer install, to require all dependencies inside your slim application
```
> composer install
``` 

To the end you have to generate the autoload files with this command:
```
> composer dump-autoload -o
```


Now you are ready for REST!
##### Happy Coding!