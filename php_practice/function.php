<?php
	echo $_SERVER['HTTP_USER_AGENT'],'</br>'; 
	
	function get_tm() {
		list ( $usec, $sec ) = explode (' ', microtime () );
		return (( float ) $usec + ( float ) $sec);
	}
	$temp='test';
	$result=' ';
	define('num',100000);
	$start=get_tm();
	 
// 	for($i=0;$i<num;$i++)
// 	{
// 		$result=$result.$temp;
// 	}
// 	echo get_tm()-$start;
	
	for($i=0;$i<num;$i++)
	{
		$result.=$temp;
	}
	echo get_tm()-$start;
	
	function string() {
		$str=null;$h='hello';$w='world';
		//$b='</br>';
		$b="\r\n";
		$str.=strlen($h.$w);
		$str.=$b;
		$str.=strrev($h);
		$str.=$b;
		$str.=strncmp($h, $w,0);
		return $str;
	}
	
	echo string();
	$addr='abcdef';
	$addr = strtr($addr, 'abcd','efgh');
	//echo $addr,'</br>';
	echo $addr,"\r\n";
	echo 'hello','world';
?>