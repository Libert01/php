<?php
require_once 'user_sql.class.php';
//对user表各种操作   业务逻辑处理类
class userService {
    
    //验证用户
    function  checkUser($id,$passwd){
        $sql="select name,passwd from user where id=$id;";
        $mysql = new SQLdb();
        
        $res = $mysql->SQL_dql($sql);
        if(($row = $res->fetch_assoc())!=false){
            if($row["passwd"]==md5($passwd)){
                return $row["name"];
            }
        }
        
        $res->free();
        $mysql->SQL_close();
        
        return "";
    }
    
    
}