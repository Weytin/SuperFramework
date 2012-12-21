<?php
if(!defined('SUPER')) { die('Direct Access Denied'); }

/* MySQL configuration */

$_config['sql']['host'] = 'localhost';
$_config['sql']['user'] = 'root';
$_config['sql']['pass'] = 'lalala';
$_config['sql']['db'] = 'superdb';

/* User configuration */

$_config['user']['motto'] = 'I love SuperCMS!'; // User's default motto.
$_config['user']['credits'] = 5000; // User's default credits.
$_config['user']['pixels'] = 6000; // User's default pixels.
$_config['user']['rank'] = 1; // User's default rank.
$_config['user']['figure'] = 'hd-180-1.ch-210-66.lg-270-82.sh-290-91.hr-100-'; // User's default figure.

/* Site configuration */

$_config['site']['name'] = 'Habbo';
$_config['site']['motto'] = 'Make friends, join the fun, get noticed!';
$_config['site']['url'] = 'http://127.0.0.1';
?>