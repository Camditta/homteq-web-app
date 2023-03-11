<?php
session_start();
include ("db.php");
$pagename="Make your home smart";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>"; 

echo "<body>";
include ("headfile.html");
include ("detectlogin.php"); 
echo "<h4>".$pagename."</h4>";  

// Create a $SQL variable and populate it with SQL statement thats retrieves product details
$SQL="select prodId, prodName, prodPicNameSmall, prodDescripShort, prodPrice from Product";
//run SQL query for connected DB or exit and display error message
$exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error($conn));

echo "<table style = 'border: 0px'>";
// Create an array of records (2 dimenstional variable) called $arrayp.
// Populate it with the records retrieved by the SQL query previously executed.
// Iterate through the array i.e while the end of the array has not been reached, run through it

while ($arrayp=mysqli_fetch_array($exeSQL)){
    
    echo "<tr>";
    echo "<td style='border: 0px'>";
    // Display the small image whose name is contained in the array
    echo "<a href=prodbuy.php?u_prod_id=".$arrayp['prodId'].">";
    echo "<img src=images/".$arrayp['prodPicNameSmall']." height=200 width=200>";
    echo "</a>";
    echo "</td>";
    echo "<td style='border: 0px'>";
    echo "<p><h5>".$arrayp['prodName']."</h5></p>"; // Display product name as contained in the array
    echo "<p class='updateInfo'>".$arrayp['prodDescripShort']."</p>";
    echo "<p class='updateInfo'><b>&pound".$arrayp['prodPrice']."</b></p>";
    echo "</td>";
    echo "</tr>";
}

echo "</table>";
include("footfile.html"); //include head layout
echo "</body>";
?>