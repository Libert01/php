<?php
// 对数据库的操作
class SQLdb
{

    public $con;

    public $host = "localhost";

    public $name = "wukong";

    public $passwd = "123";

    public $dbname = "world";

    function __construct()
    {
        $this->con = new mysqli($this->host, $this->name, $this->passwd, $this->dbname);
        
        if ($this->con->connect_error)
            die("connect failed." . $this->con->connect_error);
    }
    
    // 数据库查询语句
    function SQL_dql($sql)
    {
        $res = $this->con->query($sql) or die($this->con->error);
        return $res;
    }
    // 通过数组返回 查询结果
    function SQL_arr($sql)
    {
        $arr = array();
        $res = $this->con->query($sql) or die($this->con->error);
        
        while (($row = $res->fetch_assoc()) != false) {
            $arr[] = $row;
        }
        
        $res->free();
        return $arr;
    }
    
    // 数据库增加、修改、删除语句
    function SQL_dml($sql)
    {
        $bo = $this->con->query($sql) or die($this->con->error);
        
        if (! $bo) {
            // 执行失败 
            return 0;
        } else {
            if (($this->con->affected_rows) > 0) {
                //
                return 1;
            } else {
                // 没有行数受到影响
                return 2;
            }
        }
    }
    // 分页情况查询
    // $sql1=select * from tab limit 0,10
    // $sql2=select count(id) from tab
    function SQL_page($sql1, $sql2, &$page)
    {
        $res = $this->con->query($sql1) or die($this->con->error);
        $arr = array();
        while (($row = $res->fetch_assoc()) != false) {
            $arr[] = $row;
        }
        $res->free();
        $page->arr = $arr;
        
        $res2 = $this->con->query($sql2) or die($this->con->error);
        if (($row = $res2->fetch_row()) != false) {
            $page->rcount = $row[0];
            $page->pcount = ceil($row[0] / $page->prow);
        }
        //分页
        $navi ="";
        $navi.="<a href='user_emp.php?pnow=1'>首页</a>&nbsp;&nbsp;";
        if ($page->pnow > 1) {
            $i = $page->pnow - 1;
            $navi.= "<a href='user_emp.php?pnow=$i'>上一页</a>&nbsp;&nbsp;";
        } else {
        
            $navi.= "<a href='user_emp.php?pnow=1'>上一页</a>&nbsp;&nbsp;";
        }
        // 翻10页
        if ($page->pnow > 10) {
        
            $j = $page->pnow - 10;
            $navi.= "<a href='user_emp.php?pnow=$j'>&lt;&lt;</a>&nbsp;&nbsp;";
        } else {
        
            $navi.= "<a href='user_emp.php?pnow=1'>&lt;&lt;</a>&nbsp;&nbsp;";
        }
       
        //显示$prow个数字分页
        $sn = floor(($page->pnow-1)/$page->prow)*$page->prow+1;
        $in = $sn;
        for(;$sn<$in+10;$sn++){
            $navi.= "<a href='user_emp.php?pnow=$sn'>$sn</a>&nbsp;&nbsp;";
        }
        
        if ($page->pnow < $page->pcount - 10) {
        
            $j = $page->pnow + 10;
            $navi.= "<a href='user_emp.php?pnow=$j'>&gt;&gt;</a>&nbsp;&nbsp;";
        } else {
        
            $navi.= "<a href='user_emp.php?pnow=$page->pcount'>&gt;&gt;</a>&nbsp;&nbsp;";
        }
        
        if ($page->pnow < $page->pcount) {
        
            $i = $page->pnow + 1;
            $navi.= "<a href='user_emp.php?pnow=$i'>下一页</a>&nbsp;&nbsp;";
        } else {
            $navi.= "<a href='user_emp.php?pnow={$page->pcount}'>下一页</a>&nbsp;&nbsp;";
        }
        // 尾页
        $navi.= "<a href='user_emp.php?pnow={$page->pcount}'>尾页</a>&nbsp;&nbsp;";
        
        $navi.= "当前页{$page->pnow}/{$page->pcount}页";


        $navi.= "当前页{$page->pnow}/{$page->pcount}页";
        
        $navi.= "<form action='user_emp.php' method='get'>
                                                   跳转到<input type='text' name='pnow' />
                     <input type='submit' value='go' />
                 </form>";
        
        $page->navi= $navi;
        
    }
    
    // 关闭连接方法
    function SQL_close()
    {
        if (! empty($this->con))
            $this->con->close();
    }
}

?>
