<?php

namespace Creational\Singleton;

class Singleton
{
    /** @var self */
    private static $instance;

    private $connection;

    private function __construct()
    {
    }

    public static function getInstance()
    {
        if (!self::$instance) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function dbConnect()
    {
        return $this->connection;
    }

    private function __clone()
    {
    }

    public function getConnection()
    {
        return $this->connection;
    }

    public function setConnection($connection)
    {
        $this->connection = $connection;
    }
}
