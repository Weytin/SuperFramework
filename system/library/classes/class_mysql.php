<?php
if(!defined('SUPER')) { die ("Direct Access Denied"); }
class Database
{
	public function connect()
	{
		global $_config;
		$conn = mysql_connect($_config['sql']['host'], $_config['sql']['user'], $_config['sql']['pass']);
		$db_conn = mysql_select_db($_config['sql']['db'], $conn);
		
		if(!$conn || !$db_conn)
		{ 
			Core::error('There was an error connecting to MySQL. The username or password is incorrect.');
		}
		
		elseif($_config['sql']['host'] == '' || $_config['sql']['user'] == '' || $_config['sql']['pass'] = '' || $_config['sql']['db'] == '')
		{
			Core::error('There are some blanks fields in your configuration file.');
		}
	}
	
	public function disconnect()
	{
		if(isset($this->conn))
		{
			mysql_close($this->conn);
			unset($this->conn);
		}
	}
	
	public function clean($string)
	{
		return mysql_real_escape_string(strip_tags(stripslashes(htmlspecialchars($string))));
	}
}
?>