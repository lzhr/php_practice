<!DOCTYPE html>
<html>
    <head>
        <title>{$title}</title>
	</head>
    <body>
		<table border="1" width="98%" align="center" id="table1">
		<caption>mysql查询</caption>
			<tr><th>用户</th><th>信息</th></tr>
			{foreach $user as $u}
				<tr>
					<td>{$u.name}</td>
					<td>{$u.info}</td>
				</tr>
			{/foreach}		
		</table>
		
		{* literal标签区域内的数据将被当作文本处理 *}
		JavaScript输出：
		{literal}
			<script>
				document.write("Hello World!")
			</script>
		{/literal}
    </body>
</html>