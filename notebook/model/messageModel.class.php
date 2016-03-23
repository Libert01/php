<meta charset="utf-8">
<?php
require_once 'sqlHelper.class.php';

class messageModel
{
    //验证用户登录
    function checkuser($name,$pwd){
        $sql = "select passwd from person where name='$name';";
        $sqlHelp = new sqlHelper();
        
        $res = $sqlHelp->execute_dqlarr($sql);
        
        if($res){
            if($res[0]['passwd'] ==md5($pwd)){
                return 0; //验证成功
            }else {
                return 1; //验证错误  密码
            }
        } else {
            return 1; //验证错误  用户名
        }
            
        $res->free();
        $sqlHelp->close();
        
    }
    
    function showMessage($user)
    {
        $sql = "select * from message where getter='$user' or getter='all';";
        $sqlHelp = new sqlHelper();
        
        $res = $sqlHelp->execute_dqlarr($sql);
        
        $sqlHelp->close();
        return $res;
    }
    //分页
    function fenyepage($page, $user)
    {
        // require_once 'fenyePage.class.php';
        // $page = new page();
        $sqls = array();
        $sqls[0] = "select count(id) as count from message where 
                    getter='$user' or getter = 'all' ";
        
        $sqls[1] = "select * from message where getter='$user' or getter='all' 
        limit " . ($page->pnow - 1) * $page->prow . ",$page->prow";
        
        $sqlHelp = new sqlHelper();
        $sqlHelp->execute_page($sqls, $page);
        
        $sqlHelp->close();
    }
}