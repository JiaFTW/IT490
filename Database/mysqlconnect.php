#!/usr/bin/php
<?php

//TODO: make this into class or function

require_once 'dbFunctionLib.php';

//use 127.0.0.1 to connect to your local mysql server.
$mydb = new mysqli('127.0.0.1','ccagUser','12345','ccagDB');

if ($mydb->errno != 0)
{
	echo "failed to connect to database: ". $mydb->error . PHP_EOL;
	exit(0); //TODO: change to return error or boolean
}

echo "successfully connected to database".PHP_EOL;


//Test Adding to Database
//addAccount("Bob","bobby@gmail.com","crabcake",$mydb);

//Test Query
/*$query = "select * from accounts;";

$response = $mydb->query($query);
if ($mydb->errno != 0)
{
	echo "failed to execute query:".PHP_EOL;
	echo __FILE__.':'.__LINE__.":error: ".$mydb->error.PHP_EOL;
	exit(0);
}
if successful, echos out all usernames from accounts table (for testing)
else { 
	while ($r = mysqli_fetch_assoc($response)) {
		echo $r['username'].PHP_EOL;
	}
} */



?>
