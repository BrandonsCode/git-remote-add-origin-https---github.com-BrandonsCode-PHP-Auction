
<html>
<head><title></title></head>
<body>
    <?php

    $DBHOST = "localhost";
    $DBUSER = "root";
    $DBPWD = "";
    $DBNAME = "test_db";

    $conn = new mysqli($DBHOST,  $DBUSER,  $DBPWD,  $DBNAME);

    
    if($conn->connect_error)
    {
        die("Connection failed:" .$conn->connect_error);
    }

    echo "Connection successfully";

    
    ?>
</body>
</html>