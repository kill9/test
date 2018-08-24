<?php

namespace core;

use core\database as dbobject;

class model {

    private $mysql;
    private $where;
    private $order;
    public $table;

    public function __construct() {
        $this->mysql = dbobject::init();
    }

    public function find() {
        $condition = $this->handle_where();
        $find = $this->mysql->fetch($condition);
        return $find;
    }

    public function select() {
        $condition = $this->handle_where();
        $select = $this->mysql->fetchall($condition);
        return $select;
    }

    public function exec_sql($sql) {
        $query = $this->mysql->fetchall($sql);
        return $query;
    }

    private function handle_where() {
        $select = '';
        $where = '';
        $order = '';
        $group = '';
        if ($this->field) {
            $select = $this->field;
        } else {
            $select = '*';
        }
        if ($this->where) {
            $where .= ' where 1 ';
            $where .= ' and (' . $this->where . ')';
        }
        if ($this->group) {
            $group .= ' group by ';
            $group .= $this->group;
        }
        if ($this->order) {
            $order .= ' order by ';
            $order .= $this->order;
        }
        $sql = 'select ' . $select . ' from `' . $this->mysql->prefix . $this->table . '` ' . $where . $group . $order;
        return $sql;
    }

    public function where($where) {
        $this->where = $where;
        return $this;
    }

    public function order($order) {
        $this->order = $order;
        return $this;
    }

    public function group($group) {
        $this->group = $group;
        return $this;
    }

    public function field($field) {
        $this->field = $field;
        return $this;
    }

    public function errors() {
        return error_get_last();
    }

}
