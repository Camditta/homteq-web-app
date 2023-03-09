<?php
include("db.php");

$pagename="Smart Basket";       //Create and populate a variable called $pagename
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";       //Call in stylesheet
echo "<title>".$pagename."</title>";        //display name of the page as window title
echo "<body>";
include ("headfile.html");      //include header layout file
echo "<h4>".$pagename."</h4>"; //display name of the page on the web page

$newprodid=$_POST['h_prodid'];
$reququantity=$_POST['p_quantity'];

//Display id of selected product
echo "<p class='updateInfo'>Id of selected product: ".$newprodid."<p>";
//Display quantity of selected product
echo "<p class='updateInfo'>Quantity of selected product: ".$reququantity."<p>";

include("footfile.html"); //include head layout
echo "</body>";
?>