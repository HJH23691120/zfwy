<?php
header('Content-Type: application/text;charset=UTF-8');
@$uname=$_REQUEST['user'];
@$upwd=$_REQUEST['upwd'];
if($uname===null||$uname===""){
	die("uname not empty");
}
if($upwd===null||$upwd===""){
	die("upwd not empty");
}
require('init.php');
$sql="SELECT * FROM xz_user WHERE uname='$uname'";
$resort=mysqli_query($conn,$sql);
if($resort===false){
	echo "sql语句错误请检查$sql";
}else{
	$row=mysqli_fetch_row($resort);
	if($row!==null){
		echo "用户名重复注册失败";
	}else{
		$sql="INSERT INTO xz_user VALUES
		(NULL,'$uname','$upwd','$email','$phone','img/default.png','$user_name',$gender)";
		$resort=mysqli_query($conn,$sql);
		if($resort===false){
			echo "sql语句错误请检查$sql";
		}else{
			$uid=mysqli_insert_id($conn);
			echo "注册成功新数据在数据库里的自增编号为$uid";
		}
	}
}

	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	
//	@$uname=$_REQUEST['user'];
//	@$upwd=$_REQUEST['upwd'];
//	@$mail=$_REQUEST['mail'];
//	@$phone=$_REQUEST['phone'];
//	@$bie=$_REQUEST['bie'];
//	@$avatar=$_REQUEST['avatar'];
//	if($uname===NULL||$uname===""){
//		die("用户名不能为空");
//	}
//	if($upwd===NULL||$upwd===""){
//		die("密码名不能为空");
//	}
//	if($mail===NULL||$mail===""){
//		die("邮箱名不能为空");
//	}
//	if($phone===NULL||$phone===""){
//		die("手机号不能为空");
//	}
//	if($bie===NULL||$bie===""){
//		die("性别不能为空");
//	}
//	$conn=mysqli_connect('127.0.0.1','root','','xuezii',3306);
//	$sql="INSERT INTO xz_user VALUES(NULL,'$uname','$upwd','$mail','$phone','img/default.png','$avatar','$bie')";
//	$resort=mysqli_query($conn,$sql);
//	if($resort){
//		$uid=mysqli_insert_id($conn);
//		echo "注册成功 <br>";
//		echo "新用户在数据库中的编号为$uid";
//	}else{
//		echo "注册失败";
//	}
//?>