<?php

declare(strict_types=1);

namespace Core\Database;

use Core\Config\Config;
use PDO;

/**
 * Class Database
 * @package Core\Database
 */
class Database
{
    /** @var Database $instance contains an instance Database */
    private static $instance;

    /** @var PDO $pdo contains a instance PDO */
    private $pdo;

    /**
     * This method is responsible for ensuring that the class is in a single instance.
     *
     * @return static
     */
    public static function getInstance(): self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Create an instance of the pdo class
     */
    private function __construct()
    {
        $dbOptions = Config::getDataBase();

        $this->pdo = new PDO(
            'mysql:host=' . $dbOptions['host'] . ';dbname=' . $dbOptions['dbname'],
            $dbOptions['user'],
            $dbOptions['password'],
            [
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ]
        );
    }

    public function query(string $sql, array $params, string $className): array
    {
        $sth = $this->pdo->prepare($sql);

        $sth->execute($params);

        return $sth->fetchAll(PDO::FETCH_CLASS, $className);
    }

    private function __clone()
    {
    }

    private function __wakeup()
    {
    }
}
