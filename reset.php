<html>

<head><title></title></head>
<body>
<?php
$DBHOST = "localhost";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "auction";
$conn = new mysqli($DBHOST, $DBUSER, $DBPWD, $DBNAME);


if($conn->connect_error)
{
die("Connection failed!".$conn->connect_error);
}

$statement = "DELETE FROM bid";
$conn->query($statement);

$statement = "UPDATE item SET current_bid=0, bid_num=0";
$conn->query($statement);

$conn->close();

?>


</body>
</html>