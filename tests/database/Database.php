<?php

class DatabaseTest extends PHPUnit_Extensions_Database_TestCase {
    // only instantiate pdo once for test clean-up/fixture load
    static private $pdo = null;

    // only instantiate PHPUnit_Extensions_Database_DB_IDatabaseConnection once per test
    private $connection = null;

    public final function getConnection() {
        if ($this->connection === null) {
            if ($this->connection === null) {
                if (self::$pdo == null) {
                    self::$pdo = new PDO('sqlite::memory:');
                }
                $this->connection = $this->createDefaultDBConnection(self::$pdo, ':memory:');
            }
        }
        return $this->connection;
    }

    protected function getDataSet() {
        echo dirname(__FILE__).'/socialnetworkdataset.xml';
        return $this->createMySQLXMLDataSet(dirname(__FILE__).'\socialnetworkdataset.xml');
    }
}
