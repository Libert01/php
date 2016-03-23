<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>信息列表</title>
</head>
<body>
<h2>
	<a href="">发布信息</a>
	<a href="">退出系统</a>
</h2>

<table>
<tr>
	<th>id</th>
	<th>from</th>
	<th>to</th>
	<th>time</th>
	<th>message</th>
</tr>
{foreach from=$res item=temp}
<tr>
  <td> {$temp.id}</td>
  <td> {$temp.sender}</td>
  <td> {$temp.getter}</td>
  <td> {$temp.sendtime}</td>
  <td> {$temp.content}</td>
 
</tr>
{/foreach}
</table>
{$navi}

</body>
</html>