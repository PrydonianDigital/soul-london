<?php
/* MOVE TO wp-content folder */
/* Tell search engines that the site is temporarily unavailable */
$protocol = $_SERVER['SERVER_PROTOCOL'];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) {
	$protocol = 'HTTP/1.0';
}
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?><!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<title>Maintenance In Progress - Soul London</title>
<style type="text/css" media="screen">
body {
	background:url(/wp-content/themes/soul-london/images/maintenance.png);
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center center;
	background-attachment: fixed;
}
</style>
</head>
<body>
</body>
</html>
<?php
die();
