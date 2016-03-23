<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>管理用户</title>
</head>
<body>
	<a href="user_main.php">返回主页</a>
	<h1>管理用户</h1>
<?php
require_once 'user_empService.class.php';
require_once 'user_page.class.php';

$emp = new empService();
$page = new page();

// $mysqli = new mysqli("localhost","root","/123","world");

// if($mysqli->connect_error){
// die("connect failed.".$mysqli->connect_error);
// }
// $sqlc = "select count(id) from emp;";
// $resc=$mysqli->query($sqlc);
// if(($rowc=$resc->fetch_row())!=false){
// $rcount =$rowc[0]; //记录总数
// }
// $pnow第几页 $pcount共几页 $prow每页显示记录数 $rcount记录总数
$page->pnow = 1;
if (! empty($_GET["pnow"])) {
    $page->pnow = $_GET["pnow"];
}
$page->prow = 20;

$emp->page($page);

if(!empty($_GET["del"])){
    $id= $_GET["id"];
    
    $emp->delEmpById($id);
}
// 总共页数 向上取整
// $pcount=ceil($rcount/$prow);
// $rcount = $emp->pcount("emp", $prow)["rcount"];
// $pcount = $emp->pcount("emp", $prow)["pcount"];
// $sql = "select * from emp limit ".($pnow-1)*$prow.",$prow";

// $res= $mysqli->query($sql);

// $res = $emp->pnow($pnow, $prow);

$tab = "<table border=1 bordercolor='green' style='width: 600px;
            text-align: center; border-collapse: collapse;' >";
$tab .= "<tr>
            <th>编号</th>
            <th>姓名</th>
            <th>职位</th>
            <th>部门</th>
            <th>操作</th>
        </tr>";
/*
 * while(($row = $res->fetch_assoc())!=false){
 * echo "<tr>
 * <td>{$row['id']}</td>
 * <td>{$row['name']}</td>
 * <td>{$row['zhi']}</td>
 * <td>{$row['bumen']}</td>
 * <td>
 * <a href='#'>编辑</a>&nbsp;&nbsp;
 * <a href='#'>删除</a>
 * </td>
 * </tr>";
 * }
 */
for ($i = 0; $i < count($page->arr); $i ++) {
    $tab .= "<tr>
                <td>{$page->arr[$i]['id']}</td>
                <td>{$page->arr[$i]['name']}</td>
                <td>{$page->arr[$i]['zhi']}</td>
                <td>{$page->arr[$i]['bumen']}</td>
                <td>
                    <a href='user_emp.php?'>编辑</a>&nbsp;&nbsp;
                    <a href='user_emp.php?del=true&id={$page->arr[$i]['id']}'>删除</a>
                </td>
              </tr>";
}

$tab .= "</table>";
echo $tab;
/*
  //首页
  echo "<a href='user_emp.php?pnow=1'>首页</a>&nbsp;&nbsp;";
  // 翻一页
  if ($page->pnow > 1) {
     $i = $page->pnow - 1;
     echo "<a href='user_emp.php?pnow=$i'>上一页</a>&nbsp;&nbsp;";
  } else {
 
     echo "<a href='user_emp.php?pnow=1'>上一页</a>&nbsp;&nbsp;";
  }
  // 翻10页
  if ($page->pnow > 10) {
 
     $j = $page->pnow - 10;
  echo "<a href='user_emp.php?pnow=$j'>&lt;&lt;</a>&nbsp;&nbsp;";
  } else {
 
     echo "<a href='user_emp.php?pnow=1'>&lt;&lt;</a>&nbsp;&nbsp;";
  }
 
  //显示$prow个数字分页
  $sn = floor(($page->pnow-1)/$page->prow)*$page->prow+1;
  $in = $sn;
  for($sn;$sn<$in+10;$sn++){
     echo "<a href='user_emp.php?pnow=$sn'>$sn</a>&nbsp;&nbsp;";
  }
 
  if ($page->pnow < $page->pcount - 10) {
 
  $j = $page->pnow + 10;
     echo "<a href='user_emp.php?pnow=$j'>&gt;&gt;</a>&nbsp;&nbsp;";
  } else {
 
     echo "<a href='user_emp.php?pnow=$page->pcount'>&gt;&gt;</a>&nbsp;&nbsp;";
  }
 
  if ($page->pnow < $page->pcount) {
 
  $i = $page->pnow + 1;
     echo "<a href='user_emp.php?pnow=$i'>下一页</a>&nbsp;&nbsp;";
  } else {
     echo "<a href='user_emp.php?pnow=$page->pcount'>下一页</a>&nbsp;&nbsp;";
  }
  // 尾页
  echo "<a href='user_emp.php?pnow=$page->pcount'>尾页</a>&nbsp;&nbsp;";

  echo "当前页{$page->pnow}/{$page->pcount}页";

  echo "<form action='user_emp.php' method='get'>
                         跳转到<input type='text' name='pnow' />
          <input type='submit' value='go' />
       </form>"; 
*/  
  echo $page->navi;  
 
?>

</body>
</html>