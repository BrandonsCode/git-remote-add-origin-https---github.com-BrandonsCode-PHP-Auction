<html>
<head><title></title>	

<link rel="stylesheet" type="text/css" href="style.css">
	 	
</head>


<body>
<?php 
echo "<img src='auction_logo.png' id='logo'/>";
echo "<br>";
echo "<form class='add_item_form' action='check_item.php' method='POST'  enctype='multipart/form-data'>";

if(isset($_GET["item"]))
{

if($_GET["item"]=="duplicate")
{
	echo "<h4>Already entered this item</h4>";
	echo "<br>";
	echo "<h4>Please try again</h4>";
 
}

else if($_GET["item"]=="successful")
{
echo "<h4>Successfully added an item!</h4>";
} 

}
 
else
{
echo "<h4>Please add an item</h4>";
}

echo "<label for='item_name' class='label'>Item Name:</label>";
echo "<input class='text'  type='text' name='item_name'/>";
echo "<br>";
echo "<label for='item_description'  class='label'>Item Description:</label>";
echo "<input class='text'  type='text' name='item_description'>";
echo "<br>";
echo "<label for='endtime'  class='label'> Ending Bid Time: </label>";
echo "<input  class='text'  type='text' name='endtime'>";
echo "<br>";
echo "<label for='item_pic'  class='label'>Item Picture: </label>";
echo "<input class='text'  type='file' value='item_pic' name='item_pic'>";
echo "<br>";
echo "<input class='submit' type='submit' value='Add Item'/>";

echo "</form>";
?>

</body>
</html>