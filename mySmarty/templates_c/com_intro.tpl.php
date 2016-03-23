
<html>
<head>
<meta charset=utf-8 >
<title><?php echo $this->tpl_vars["title"] ?></title>
<style>
{#config_load file ='../conf/mySmarty.conf'}
body{
	color: green;
}
</style>
<script>
	function fn(){
		alert(10);
	}
</script>
</head>

<body >
<h1>{#title#} </h1>
<h2 onclick="fn()">模板</h2>
<?php echo $this->tpl_vars["content"] ?>
</body>
</html>