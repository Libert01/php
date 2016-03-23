<?php
require_once 'user_sql.class.php';

class empService
{
    /*
    // 分页总数 总行数
    function pcount($tab, $prow)
    {
        $sql = "select count(id) from emp;";
        
        $mysql = new SQLdb();
        $res = $mysql->SQL_dql($sql);
        
        if (($row = $res->fetch_row()) != false) {
            $rcount = $row[0];
            $pcount = ceil($row[0] / $prow);
        }
        
        $res->free();
        $mysql->SQL_close();
        
        return array(
            "rcount" => $rcount,
            "pcount" => $pcount
        );
    }

    function pnow($pnow, $prow)
    {
        $sql = "select * from emp limit " . ($pnow - 1) * $prow . ",$prow";
        
        $empsql = new SQLdb();
        $res = $empsql->SQL_arr($sql);
        
        $empsql->SQL_close();
        return $res;
    }
    */
    function page($page)
    {
        $mysql = new SQLdb();
        $sql1 = "select * from emp limit " . ($page->pnow - 1) * $page->prow . ",$page->prow;";
        $sql2 = "select count(id) from emp;";
       
        $mysql->SQL_page($sql1, $sql2, $page);
        $mysql->SQL_close();
    }
    
    function delEmpById($id){
        $sql ="delete from emp where id=$id";
        
        $emp = new SQLdb();
        $emp->SQL_dml($sql);
        
        $emp->SQL_close();
    }
    
}