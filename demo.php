<?php
require_once dirname(__FILE__)."/src/FaceBookModel.php";


$fc = new FaceBookModel('13207122236','');
// 登录
$result = $fc->login();
if ($result['login_status'] != 1) {
	return ;
}
// 获取必要信息
if(!$fc->catchUserInfo()){
	return ;
}
//添加好友
$fc->addFriends();