<?php

declare(strict_types=1);

namespace Core\Model;

/**
 * Interface ActiveRecordInterface
 * @package Core\Model
 */
interface ActiveRecordInterface
{
    /**
     * Getting table name
     *
     * @return string
     */
    public static function getTable(): string;

    /**
     * Get all the records
     *
     * @return mixed
     */
    public static function getAll();
}
