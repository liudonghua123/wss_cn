<?php
error_reporting(0);
$hostname_tankdb = getenv("MYSQL_PORT_3306_TCP_ADDR") != null ? getenv("MYSQL_PORT_3306_TCP_ADDR") : "localhost"; 
$database_tankdb = getenv("MYSQL_ENV_DATABASE") != null ? getenv("MYSQL_ENV_DATABASE") : "tankdb";
$username_tankdb = getenv("MYSQL_ENV_USERNAME") != null ? getenv("MYSQL_ENV_USERNAME") : "root";
$password_tankdb = getenv("MYSQL_ENV_PASSWORD") != null ? getenv("MYSQL_ENV_PASSWORD") : "";
$tankdb = mysql_connect($hostname_tankdb, $username_tankdb, $password_tankdb) or trigger_error(mysql_error(),E_USER_ERROR);
mysql_query("set names 'utf8'");

require "function.class.php";

$language = "cn";
$advsearch = get_item( 'advsearch' );
$outofdate = get_item( 'outofdate' ) ;
?>
<?php require "multilingual/language_$language".".php"; ?>
