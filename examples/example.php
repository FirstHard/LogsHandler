<?php

require __DIR__ . '/../vendor/autoload.php';

use LogsHandler;

LogsHandler::info("Testing logs", ['extra' => 'information', 'about' => 'info']);
LogsHandler::debug("Testing logs", ['extra' => 'information', 'about' => 'debug']);
LogsHandler::notice("Testing logs", ['extra' => 'information', 'about' => 'notice']);
LogsHandler::warning("Testing logs", ['extra' => 'information', 'about' => 'warning']);
LogsHandler::error("Testing logs", ['extra' => 'information', 'about' => 'error']);
LogsHandler::critical("Testing logs", ['extra' => 'information', 'about' => 'critical']);
LogsHandler::alert("Testing logs", ['extra' => 'information', 'about' => 'alert']);
LogsHandler::emergency("Testing logs", ['extra' => 'information', 'about' => 'emergency']);
