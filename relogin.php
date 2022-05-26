<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
	
 
</head>
<body>
<?php
echo "<img src='auction_logo.png' id='logo'>";
echo "<br>";
echo "<form class='relogin_form' action='check_login.php' method='POST'>";
echo "<h4>Please Login Again</h4>";
echo "<label for='username' class='label'> Username:</label>";
echo "<input class='text' type='text' name='username' placeholder='Username'>";
echo "<br>";
echo "<label for='password' class='label'>Password:</label>";
echo "<input  class='password' type='password' name='password' placeholder='Password'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Sign in'/>";	
echo "</form>";
	?>
</body>
</html>


