<html>
<head><title></title>

 <link rel="stylesheet" type="text/css" href="style.css">
 </head>
<body>

<?php

echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";
echo "<form class='add_buyer_form' action='check_buyer.php' method='POST'>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="successful")
{
	echo "<h4>Successfully Added User!</h4>";
 
}

else if($_GET["buyer"]=="duplicate")
{
	echo "<h4>Buyer Already Exists. Please Enter Another Username And Password</h4>";
 
}



}
 
else
{
echo "<h4>Please Add The Buyer's Username and Password</h4>";
}
echo "<label for='username' class='label'> Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";

echo "<label for='password' class='label'>Password:</label>";
echo "<input class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Add Buyer'/>";	
echo "</form>";
echo "</div>";
?>
</body>
</html>


