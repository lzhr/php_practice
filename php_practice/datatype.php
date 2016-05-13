<?php
	$datai =3;  
	$datas='hello';
	var_dump($datai,$datas);
	echo gettype($datai),' ',is_int($datas),"\r\n";
	
	echo settype($datai,"string"),"\r\n";
	var_dump($datai,$datas);
	echo $datai
?> 