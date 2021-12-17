# LogsHandler Dedicated package for the FirstHard/mvcShop training project
Homework (12) on the topic "Composer. Packagist."
***
This package is an add-on to the monolog/monolog library.
***
### Basic usage
>Attach a package to the project:<br>`composer require firsthard/loghandler`  
After that, in the file  
`vendor/firsthard/loghandler/src/LogsHandler.php`  
if necessary, change the value of  
`private const LOG_PATH = 'logs/';`  
to your path to the logs folder.  

>Class usage:
```
require __DIR__ . '/../vendor/autoload.php';

use FirstHard\LogsHandler;

LogsHandler::info("Testing logs", ['extra' => 'information', 'about' => 'info']);
LogsHandler::debug("Testing logs", ['extra' => 'information', 'about' => 'debug']);
LogsHandler::notice("Testing logs", ['extra' => 'information', 'about' => 'notice']);
LogsHandler::warning("Testing logs", ['extra' => 'information', 'about' => 'warning']);
LogsHandler::error("Testing logs", ['extra' => 'information', 'about' => 'error']);
LogsHandler::critical("Testing logs", ['extra' => 'information', 'about' => 'critical']);
LogsHandler::alert("Testing logs", ['extra' => 'information', 'about' => 'alert']);
LogsHandler::emergency("Testing logs", ['extra' => 'information', 'about' => 'emergency']);
```
