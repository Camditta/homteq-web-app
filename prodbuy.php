<?php
include("db.php");
$pagename="A Smart Buy For a Smart Home";       //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";       //Call in stylesheet
echo "<title>".$pagename."</title>";        //display name of the page as window title
echo "<body>";
include ("headfile.html");      //include header layout file
echo "<h4>".$pagename."</h4>";      //display name of the page on the web page
// retrieve the product id passed from the previous page using the GET method and the $_GET super global variable
// applied to the query string u_prodid_id
// store the value in a local variable called $prodid
$prodid=$_GET['u_prod_id'];

// display the value of the product id for debugging purposes
// echo "<p>Selected product id: ".$prodid."</p>";

// Create a $SQL variable and populate it with SQL statement thats retrieves product details
$SQL="select prodId, prodName, prodPicNameLarge, prodDescripLong, prodPrice, prodQuantity from Product where prodId=".$prodid;
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

$arrayp=mysqli_fetch_array($exeSQL);
echo "<table style='border: 0px'>";
echo "<tr>";
echo "<td style='border: 0px'>";
echo "<img src=images/".$arrayp['prodPicNameLarge']." height=300 width=500>";
echo "</td>";
echo "<td style='border: 0px'>";
echo "<p><h5>".$arrayp['prodName']."</h5></p>";
echo "<br><p>".$arrayp['prodDescripLong']."</p>";
echo "<br><p><b>&pound".$arrayp['prodPrice']."</b></p>";
echo "<br><p>Number left in stock: ".$arrayp['prodQuantity'] ."</p>";
echo "</td>";
echo "</tr>";
echo "</table>";

echo "<br><p>Number to be purchased: ";
//create a form made of one drop-down menu and one button for user to enter quantity
//the value entered in the form will be posted to the basket.php to be processed
echo "<form action='basket.php' method='post'>";
echo "<select name='p_quantity'>";
for ($i=1; $i<=$arrayp['prodQuantity']; $i++)
{
echo "<option value=".$i.">".$i."</option>";
}
echo "</select>";
echo "<input type='submit' name='submitbtn' value='ADD TO BASKET' id='submitbtn'>";
//pass the product id to the next page basket.php as a hidden value
echo "<input type='hidden' name='h_prodid' value=".$prodid.">";
echo "</form>";
echo "</p>";

include("footfile.html"); //include head layout
echo "</body>";
?>