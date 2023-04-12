<?php
	function conexion(){
	$host = "host=containers-us-west-41.railway.app";
	$port = "port=6953";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=gx48a5ALGCFUHSn4bfGb";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>