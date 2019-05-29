<?php
header('Content-Type: application/json;charset=UTF-8');
@$uname=$_REQUEST['user'];
@$pw=$_REQUEST['pwd'];
if($uname===null||$uname===""){
	die("uname not empty");
}
if($pw===null||$pw===""){
	die("upwd not empty");
}
require('init.php');
$sql="SELECT * FROM xz_user WHERE uname='$uname' AND upwd='$pw'";
$resort=mysqli_query($conn,$sql);
if($resort===false){
	echo "SQL语句错误请检查$sql";
}else{
	$row=mysqli_fetch_assoc($resort);
	if($row===null){
		echo "账号或密码错误";
	}else{
		$str=json_encode($row);
		echo $str;
	}
}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//@$uname=$_REQUEST['uname'];
//@$upwd=$_REQUEST['upwd'];
//if($uname===null||$uname===""){
//	die("uname not empty");
//}
//if($upwd===null||$upwd===""){
//	die("upwd not empty");
//}
//require('init.php');
//$sql="SELECT * FROM xz_user WHERE uname='$uname' AND upwd='$upwd'";
//$resort=mysqli_query($conn,$sql);
//if($resort===false){
//	echo "请检查SQL语句";
//}else{
//	$row=mysqli_fetch_assoc($resort);
//	if($row===null){
//		echo "用户名或密码错误";
//	}else{
//		echo "登录成功";
//		var_dump($row);
//	}
//}
//?>