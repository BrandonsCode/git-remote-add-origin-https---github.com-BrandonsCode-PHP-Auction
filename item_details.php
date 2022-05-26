<html>
<head><title></title>

	 <link rel="stylesheet" type="text/css" href="style.css">
	
</head>

	 
 
	
<body>
<?php
 
session_start();



if(!isset($_GET["item_id"]) || !isset($_SESSION["username"]))
{
header("Location:display_items.php"); 
}


else
{
echo "<img src='auction_logo.png' id='logo'>";	
echo "<a href='logout.php' class='logout button'>Logout </a>";

$username =	$_SESSION["username"];
$DBHOST = "localhost";
$DBUSER = "root";
$DBPWD = "";
$DBNAME = "auction";
$conn = new mysqli($DBHOST, $DBUSER, $DBPWD, $DBNAME);	

if($conn->connect_error)
{
die("Connection failed!".$conn->connect_error);
}


$statement = "SELECT * FROM item WHERE item_id =?";
$iid = $_GET["item_id"];

$stmt = $conn->prepare($statement);
$stmt->bind_param("s", $iid);
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc(); /*select the data of the specific item from the ITEM table*/


$iid = $row["item_id"];
$iname= $row["item_name"];
$i_desc = $row["item_desc"];
$iiprice = $row["init_bid"];
$end = $row["endtime"];
$bid_num = $row["bid_num"];
$icprice = $row["current_bid"];
$iimg = "item/";
$iimg = $iimg.$row["item_pic"];
 

echo "<div class='item'>";	
echo "<div class='item_row'>Item Id: $iid</div>";
echo "<div class='item_row'>Item Name: $iname</div>";
echo "<img class='item_img' src='$iimg' alt='image'>";
echo "<div class='item_row'>Item Description: $i_desc</div>";
echo "<div class='item_row'>End Time: $end</div>";
echo "<div class='item_row'>Number Of Bids: $bid_num</div>";
echo "<div class='item_row'>Current Bid: $$icprice</div>";
echo "<form action='bid.php' method='POST'>";
echo "<input type='hidden' value='$iid' name='item_id'/>";	
echo "<input type='hidden' value='$username' name='username'>";
echo "<select name='bid'>";
for($i=0; $i < 10; $i++)
{
 $j = $i*10;
echo "<option value='$j'>$$j</option>";
}
echo "</select>";	
echo "<input type='submit' value='Bid'>";
echo "</form>";
echo "</div>"; 
 
$conn->close(); /*display the item details */ 
 
}/*prevent direct access by user */

	
	?>
</body>
</html>