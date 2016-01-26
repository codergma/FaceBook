<?php
/**
* 自动加载类
*
*/
class AutoLoader 
{
	public static function loadByName($name){
		require_once dirname(__FILE__)."/phpQuery/phpQuery.php";
		require_once dirname(__FILE__)."/rolling-curl/RollingCurl.php";
		require_once dirname(__FILE__)."/rolling-curl/RollingCurlGroup.php";
	}
	
}
spl_autoload_register('AutoLoader::loadByName');