<?php

declare(strict_types=1);

namespace Core\Model;

use Core\Database\Database;

/**
 * Class ActiveRecord
 * @package Core\Model
 */
abstract class ActiveRecord implements ActiveRecordInterface
{
    /**
     * @param $name
     * @param $value
     */
    public function __set($name, $value)
    {
        $camelCaseName = $this->underscoreToCamelCase($name);
        $this->$camelCaseName = $value;
    }

    /**
     * Converts the shifted to camelCase
     *
     * @param string $source
     * @return string
     */
    private function underscoreToCamelCase(string $source): string
    {
        return lcfirst(str_replace('_', '', ucwords($source, '_')));
    }

    /**
     * @return array
     */
    public static function getAll(): array
    {
        $dataBase = Database::getInstance();

        return $dataBase->query("SELECT * FROM `" . static::getTable() . "`", [], static::class);
    }
}
