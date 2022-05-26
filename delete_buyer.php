<html>
<head><title></title>
	

 <link rel="stylesheet" type="text/css" href="style.css">
	 </head>
<body>

<?php
echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";
echo "<form class='delete_buyer_form' action='check_delete_buyer.php' method='POST'>";

if(isset($_GET["buyer"]))
{

if($_GET["buyer"]=="no_account")
{
	echo "<h4>No Such User To Delete</h4>";
	echo "<br>";
	echo "<h4>Please Try Again</h4>";
 
}

else if($_GET["buyer"]=="deleted")
{
echo "<h4>Successfully Deleted User!</h4>";
}

else if($_GET["buyer"]=="wrong_password")
{
echo "<h4>Wrong User And Password Combination</h4>";
echo "<br>";
echo "<h4>Please Try Again</h4>";
}

 

}
 
 else
 {
 
echo "<h4>To Delete An Account, Please Enter The Buyer's Username and Password</h4>";


 }

echo "<label for='username' class='label'>Username: </label><input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label for='password' class='label'>Password:</label><input class='password'  type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Delete User'/>";	
echo "</form>";
echo "</div>";



?>
</body>
</html>


