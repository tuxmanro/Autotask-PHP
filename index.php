<?php
date_default_timezone_set ( 'America/Chicago' );
ini_set ( 'display_errors', 1 );

ini_set ( 'log_errors', 1 );

ini_set ( 'error_log', dirname ( __FILE__ ) . '/error_log.txt' );

error_reporting ( E_ALL );
require ("QA/class.autotaskwrapper.php");
$webservicesurl = "https://webservices5.autotask.net/atservices/1.5/";
$username = "USER NAME";
$password = "PASSWORD";
$wsdl = $webservicesurl . 'atws.wsdl';
$loginarray = array('login' => $username, 'password' => $password, 'uri' => $webservicesurl, 'location' => $webservicesurl . "atws.asmx");
$client = new ATWS($wsdl, $loginarray);
$func = $client->__getFunctions();
print_r($func);
?>
