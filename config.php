<?php

/* Роли пользователей */
define('ROLE_ADMIN', 0);
define('ROLE_EDITOR', 10);
define('ROLE_USER', 100);
$errors = array();

function error_loging($param='') {
  global $errors;
  $en = mysql_errno();
  if ((int) $en > 0) {
    $et = mysql_error();
    $errors[] = $param.$et . " (" . $en . ")";
  }
}

$server = "localhost";
$username = "php2013";
$password = "php2014";
$database_name = "php2013";
mysql_connect($server, $username, $password);
error_loging(date('Y.m.d h:i:s'),time());
mysql_select_db($database_name);
error_loging(date('Y.m.d h:i:s'),time());
mysql_query("SET NAMES UTF8");
error_loging(date('Y.m.d h:i:s'),time());
echo serialize($errors);
?>
