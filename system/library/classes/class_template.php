<?php
if(!defined('SUPER')) { die ("Direct Access Denied"); }

class Template
{
	private $param = Array();
	private $tpl;

	public function __construct()
	{
		global $_config, $super, $users;
		$this->append('hotelname', $_config['site']['name']);
		$this->append('hoteldesc', $_config['site']['motto']);
		$this->append('url', $_config['site']['url']);
		$this->append('online', Core::online());
	}
	
	public function filter($param)
	{
		foreach($this->value as $replace => $value)
		{ 
			$param = str_replace("%" . $replace . "%", $value, $param);
		}
		
		return $param;   
	}
	
	public function append($key, $value)
	{
		$this->value[$key] = $value;
	}
	
	public function add_file($file)
	{
		ob_start();
		if (file_exists('web/templates/' .$file. '.tpl'))
		{
			require_once('web/templates/' .$file. '.tpl');
		} 
		else 
		{
			Core::error('SuperCMS has failed to load the template: <b>Web/Templates/'.$file.'.tpl </b>');
		}
		
		$this->tpl .= ob_get_contents();
		ob_end_clean();
	}
	
	public function add_hk_file($file)
	{
		ob_start();
		if (file_exists('../admin/templates/' . $file . '.html'))
		{
			require_once('../admin/templates/' . $file . '.html');
		} 
		else 
		{
			Core::error('SuperCMS has failed to load the template: <b>admin/templates/'.$file.'.html </b>');
		}
		
		$this->tpl .= ob_get_contents();
		ob_end_clean();
	}
	
	public function publish()
	{
		echo $this->filter($this->tpl);
	}
}
?>