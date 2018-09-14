<?php

namespace core;

class database {

    static private $object = null;

    private function __construct() {
        $config = include __CONFIG__ . DIRECTORY_SEPARATOR . 'config.php';
        $this->prefix = $config['prefix'];
        $this->conn = mysqli_connect($config['host'], $config['db_user'], $config['db_password'], $config['db_name']);
        mysqli_query($this->conn, "set names utf8");
    }

    static public function init() {
        if (self::$object == null) {
            self::$object = new self;
        }
        return self::$object;
    }

    public function query($sql) {
        $query = mysqli_query($this->conn, $sql);
        return $query;
    }

    public function fetchall($sql) {
        $query = $this->query($sql);
        $result = array();
        if ($query) {
            while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
                $result[] = $row;
            }
        }
        return $result;
    }

    public function fetch($sql) {
        $query = $this->query($sql);
        $result = array();
        if ($query) {
            $result = mysqli_fetch_array($query, MYSQLI_ASSOC);
        }
        return $result;
    }

}
