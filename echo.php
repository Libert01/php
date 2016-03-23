<?php
$user=new PDO("mysql:host=localhost","wukong","123");
var_dump($user);
echo "<br>";
$user->query("use world");
$sql=$user->query('select count(*) from tab1');
$r=$sql->fetchColumn();
var_dump($r);
//var_dump($res);

foreach($sql as $row)
{
    $count=$row[count()];
}
echo $count;
$log=10;
$pagesize=ceil($count/$log);
$start=($pagesize-1)*$log;

$sqlinfo=$user->query("select id,name,course,point from tab1 limit $start,$log");
$tab="<table>";
$tab.="<tr>
           <th>id</th>
           <th>姓名</th>
	   <th>科目</th>
	   <th>成绩</th>
       </tr>";
foreach($sqlinfo as $info)
{
     $tab.="
            <tr>
	        <td>$info[id]</td>
            <td>$info[name]</td>
            <td>$info[course]</td>
	    <td>$info[point]</td>
	    </tr>     
     ";
}
$tab.="</table>";
echo $tab;
$i=1;
for(;$i<=$pagesize;$i++)
{
    echo "<a herf=#>".$i."</a>";
}
     