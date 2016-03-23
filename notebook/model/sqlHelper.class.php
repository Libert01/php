<meta charset="utf-8" >
<?php
class sqlHelper {
    var $host="localhost";
    var $user="wukong";
    var $passwd="123";
    var $dbname="world";
    var $con;
    
    function __construct(){
        $this->con = new mysqli($this->host,$this->user,$this->passwd,$this->dbname);
        
        if($this->con->connect_error){
            die("connect failed".$this->con->connect_error);
        }
    }
    //返回资源
    function execute_dql($sql){
        $res = $this->con->query($sql) or die($this->con->error);
        return $res;
    }
    //返回数组
    function execute_dqlarr($sql){
        $res = $this->con->query($sql) or die($this->con->error);
        $arr = array();
        
        while($row = $res->fetch_assoc()){
            $arr[] = $row;
        }
        
        $res->free();
        return $arr;
    }
    //update delete insert
    function execute_dml($sql){
        $bo = $this->con->query($sql) or die($this->con->error);
        
        if(!$bo){
            return 0;  //失败
        } else {
            if($this->con->affected_rows > 0){
                return 1; //成功
            } else {
                return 2; //没有行数影响
            }
        }
    }
    //分页
    //sql1 = "select count(id) as count from tab";
    //sql2 = "select * from  tab limit ....."
    function execute_page($sqls,&$page){
        $res = $this->execute_dqlarr($sqls[0]);
        
        $page->rcount = $res[0]['count'];
        $page->pcount = ceil($page->rcount/$page->prow);
        
        $page->arr = $this->execute_dqlarr($sqls[1]);
        
        //navi
        $navi="";
        $navi .="<a href='{$page->url}?pnow=1'>首页</a>&nbsp;&nbsp;";
        
        if($page->pnow > 1){
            $i = $page->pnow -1;
            $navi .="<a href='{$page->url}?pnow=$i'>上一页</a>&nbsp;&nbsp;";
        } else {
            $navi .="<a href='{$page->url}?pnow=1'>上一页</a>&nbsp;&nbsp;";
            
        }
        
        if($page->pnow > 10){
            $i = $page->pnow -10;
            $navi .="<a href='{$page->url}?pnow=$i'>&lt;&lt;</a>&nbsp;&nbsp;";
        } else{
            $navi .="<a href='{$page->url}?pnow=1'>&lt;&lt;</a>&nbsp;&nbsp;";
        }
        
        $sn = floor(($page->pnow-1)/$page->prow)*$page->prow+1;
        $in = $sn;
        for($sn;$sn<$in +10;$sn++){
            $navi .="<a href='{$page->url}?pnow=$sn'>$sn</a>&nbsp;&nbsp;";
        }
        
        if($page->pnow < $page->pcount-10){
            $i = $page->pnow +10;
            $navi .="<a href='{$page->url}?pnow=$i'>&gt;&gt;</a>&nbsp;&nbsp;";
        } else{
            $navi .="<a href='{$page->url}?pnow=$page->pcount'>&gt;&gt;</a>&nbsp;&nbsp;";
        }
        
        if($page->pnow <  $page->pcount){
            $i = $page->pnow +1;
            $navi .="<a href='{$page->url}?pnow=$i'>下一页</a>&nbsp;&nbsp;";
        } else {
            $navi .="<a href='{$page->url}?pnow= $page->pcount'>下一页</a>&nbsp;&nbsp;";
            
        }
        
        $navi .="<a href='{$page->url}?pnow=$page->pcount'>尾页</a>&nbsp;&nbsp;";
        
        $navi .= "<br>当前{$page->pnow}/ {$page->pcount} 页";
        
        $navi .= "<form action='$page->url' method='get'>
            <input type='text' name='pnow' />
            <input type='submit' value='go' />
            </form>";
        
        $page->navi = $navi;
    }
    //关闭连接
    function close(){
        if(!empty($this->con)){
            $this->con->close();
        }
    }
    
}