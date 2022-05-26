<?php

$DBHOST = "localhost";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "test_db";

$conn = new mysqli($DBHOST, $DBUSER, $DBPWD, $DBNAME);

if($conn->connect_error)
{

die("Connection failed":. $conn->connect_error);

}

$statement = "INSERT INTO name VALUES('$_POST[first_name]','$_POST[last_name]')";

$conn->query($statement);

$conn->close();

?>
