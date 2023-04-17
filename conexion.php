<?php
	function conexion(){
	$host = "host=containers-us-west-169.railway.app";
	$port = "port=7272";
	$dbname = "dbname=railway";
	$user = "user=postgres";
	$password = "password=iIOQ1Azcw9FHktHkiXzn";
	$db = pg_connect("$host $port $dbname $user $password");
    return $db;
}
?>