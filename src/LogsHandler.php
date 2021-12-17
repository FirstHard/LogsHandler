<?php

use Monolog\Logger;
use Monolog\Handler\RotatingFileHandler;

class LogsHandler
{

    protected static $instance;
    private const LOG_PATH = '../path/to/logs/';

    static public function getLogger(): Logger
    {
        if (!self::$instance) {
            self::configureInstance();
        }

        return self::$instance;
    }

    protected static function configureInstance(): void
    {
        $dir = self::LOG_PATH;

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        $logger = new Logger('App');
        $logger->pushHandler(new RotatingFileHandler($dir . 'main.log', 5));
        self::$instance = $logger;
    }

    public static function debug($message, array $context = []): void
    {
        self::getLogger()->debug($message, $context);
    }

    public static function info($message, array $context = []): void
    {
        self::getLogger()->info($message, $context);
    }

    public static function notice($message, array $context = []): void
    {
        self::getLogger()->notice($message, $context);
    }

    public static function warning($message, array $context = []): void
    {
        self::getLogger()->warning($message, $context);
    }

    public static function error($message, array $context = []): void
    {
        self::getLogger()->error($message, $context);
    }

    public static function critical($message, array $context = []): void
    {
        self::getLogger()->critical($message, $context);
    }

    public static function alert($message, array $context = []): void
    {
        self::getLogger()->alert($message, $context);
    }

    public static function emergency($message, array $context = []): void
    {
        self::getLogger()->emergency($message, $context);
    }
}
