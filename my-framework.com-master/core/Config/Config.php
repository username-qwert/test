<?php

declare(strict_types=1);

namespace Core\Config;

/**
 * Class Config
 * @package Core\Config
 */
class Config
{
    /** @var array $routes contains settings for Router */
    private static $routes = [];

    /** @var array $dataBase contains settings for Database */
    private static $dataBase = [];

    /**
     * Get settings for Router
     * @return array
     */
    public static function getRoutes(): array
    {
        return static::$routes;
    }

    /**
     * Sets settings for Router
     *
     * @param $routers
     */
    public static function setRoutes(array $routers): void
    {
        static::$routes = $routers;
    }

    /**
     * Get settings for Database
     *
     * @return array
     */
    public static function getDataBase(): array
    {
        return static::$dataBase;
    }

    /**
     * Sets settings for Database
     *
     * @param mixed $dataBase
     */
    public static function setDataBase(array $dataBase): void
    {
        static::$dataBase = $dataBase;
    }
}
