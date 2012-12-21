<?php
if(!defined('SUPER')) { die ("Direct Access Denied"); }

class Core
{
	public static function online()
	{
		return intval(mysql_query("SELECT users_online FROM server_status LIMIT 1"));
	}
	
	public static function status()
	{
		return @intval(mysql_result(mysql_query("SELECT status FROM server_status"), 0));
	}
	
	public function in_maint()
	{
		return mysql_result(mysql_query("SELECT maintenance FROM site_config LIMIT 1"), 0);
	}
	
	public static function error($txt)
	{
		die('<center><div style="width: 50%; border: 2px solid #FF0000; background-color: #FF8C8C; padding: 10px; padding-top: 0; font-family: Arial;"><h3>SuperCMS has encountered an error.</h3>' .$txt. '</div></center>');
	}
	
	public function encrypt($string)
	{
		return sha1(md5($string));
	}
}
?>