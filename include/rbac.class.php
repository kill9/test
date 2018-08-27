<?php

namespace core;

//use core\database as dbobject;

class rbac {
    /*
     * author：li.na
      权限的添加
      $role_id      角色id(可能是一个角色(1)、多个角色(1,2,3))
      $node_id  控制器/方法---数组/字符串
     */

    public function __construct() {
//        $this->dbobject = dbobject::init();
    }

    //新增权限
    public function AuthAdd($role_id, $node_id) {
        if (empty($role_id) || empty($node_id)) {
            return;
        }
        if (is_string($node_id)) {
            $node_id = explode(',', $node_id);
        }
        if ($node_id) {
            if (count($role_id) == 1) {
                $cxsql = "select * from think_access where role_id='{$role_id}'";
            } else {
                $role_id = explode(',', $role_id);
                $cxsql = "select * from think_access where role_id in('{$role_id}')";
            }
            $isExist = mysqli_query($this->conn, $cxsql);
            foreach ($node_id as $v) {
                if ($isExist) {
                    if (count($role_id) == 1) {
                        $node_sql = "insert into think_access (role_id,node_id) values ('{$role_id}','{$v}')";
                    } else {
                        foreach ($role_id as $$vv) {
                            $node_sql = "insert into think_access (role_id,node_id) values ('{$vv}','{$v}')";
                        }
                    }
                    $res = mysqli_query($this->conn, $node_sql);
                }
            }
        }
        return true;
    }

    /*
      权限的修改
      $role_id    角色id
      $node_id    控制器/方法---数组/字符串
     */

    public function AuthEdit($role_id, $node_id) {
        if (empty($role_id) || empty($node_id)) {
            return;
        }
        if (is_string($node_id)) {
            $node_id = explode(',', $node_id);
        }
        if ($node_id) {
            if (count($role_id) == 1) {
                $cxsql = "delete from think_access where role_id='{$role_id}'";
            } else {
                $role_id = explode(',', $role_id);
                $cxsql = "delete from think_access where role_id in('{$role_id}')";
            }
            $isExist = mysqli_query($this->conn, $cxsql);
            foreach ($node_id as $v) {
                if ($isExist) {
                    if (count($role_id) == 1) {
                        $node_sql = "insert into think_access (role_id,node_id) values ('{$role_id}','{$v}')";
                    } else {
                        foreach ($role_id as $$vv) {
                            $node_sql = "insert into think_access (role_id,node_id) values ('{$vv}','{$v}')";
                        }
                    }
                    $res = mysqli_query($this->conn, $node_sql);
                }
            }
        }
        return true;
    }

    /*
      权限的查询---查询都有哪些权限
      $role_id    通过角色id查询其应有的权限
     * $role_id 1,2,3,4
     */

    public function AuthSelect($role_id) {
        if (empty($role_id)) {
            return;
        }
        if (is_array($role_id)) {
            $role_id = explode(',', $role_id);
        }
        //查询所有的控制器
        $nsql = 'select b.id,b.title,b.name,b.pid,b.class from `p_access` as a join `p_node` as b on a.node_id = b.id where a.role_id in (' . $role_id . ') and b.type = 0';
        $allData = M()->exec_sql($nsql);
        $allData = array_column($allData, null, 'title');
        
        if ($allData) {
            //格式化权限数组
            foreach ($allData as $k => $v) {
                //根据控制器查询方法
                $msql = 'select b.id,b.title,b.name from `p_access` as a join `p_node` as b on a.node_id = b.id where a.role_id in (' . $role_id . ') and b.type = 1 and pid='.$v['id'];
                $f = M()->exec_sql($msql);
                if ($f) {
                   // $f_array = array_column($f, 'title');
                    $allData[$k]['functions'] = $f;
                }
            }
        }
        return $allData;
    }

}
