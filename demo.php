<?php
require_once dirname(__FILE__)."/src/FaceBookModel.php";


$fc = new FaceBookModel('clst628@126.com','628043');
// 登录
$result = $fc->login();
if ($result['login_status'] != 1) {
	die($result['login_msg']);
}
// 获取必要信息
if(!$fc->catchUserInfo()){
	die('catchUserInfo fail');
}
//添加好友
$fc->addFriends();
