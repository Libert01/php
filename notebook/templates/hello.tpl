<html>
<head>
<title>{$str}</title>
</head>

<body>
{$str}<br>
{$int}<br>
{if $int>18}
   chnianren<br>
   {elseif $int>18}
   weichnian
{/if}

{$flo}<br>
{$boo}<br>
{$arr[2]}<br>
{$arr1.ddd}<br>
{*****zhushi*****}
{$arr2.b.yyy}<br>

**********object**********<br>
{$obj->name} || {$obj->age} || {$obj->color} || {$obj->arr.b.eee}<br> 

{foreach  from=$arr2 item=temp key=k1}
	{$k1}--><br>
 	{foreach from=$temp item=v key = k}
 		{$k} | {$v}<br>
 	{/foreach}
{/foreach}

{tt times='10' con="hello world"}

</body>
</html>