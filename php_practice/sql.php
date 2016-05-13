<?php
	$mysqli=new mysqli("127.0.0.1:3306","root","123456","myphp");
	if (mysqli_connect_errno()) {
		echo "连接失败".mysqli_connect_error();
		exit();
	} else {
		echo '成功';
	}
	$sql_1="select * from user where id=1";
	$sql_2="select * from user where id in (1,2,3)";
	$result=$mysqli->query($sql_2);

	// while($row = $result->fetch_object()){
	// $id=$row->id;
	// echo $name=$row->name;
	// $info=$row->info;
	// }

	require('smarty.config.php');
	$_smarty->assign('title', '欢迎');
	// $_smarty->assign('name',$name);
	// $_smarty->display('index.tpl');

	$_smarty->assign('user',$result);
	$_smarty->display('table.tpl');

?>