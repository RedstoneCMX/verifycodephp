<?php 
	session_start();
	//验证验证码是否正确
	$verifycode = $_POST['verifycode'];//".$this->input->post('randcode')
	$randcode = md5("prestr".$verifycode."endstr");//prestr endstr 要对应上面放入session的字符串
	$sscode = $_SESSION['randcode'];
	if($randcode != $sscode){
		echo "{'info':'验证码错误！','status':1}";
		return ;
	}
	else{
		echo "{'info':'验证码正确！','status':2}";
		return ;
	}
?>