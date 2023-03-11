<?php
session_start();
include("db.php");
$pagename="Smart Basket";
echo "<link rel=stylesheet type=text/css href=mystylesheet.css>";
echo "<title>".$pagename."</title>";
echo "<body>";
include ("headfile.html");
include ("detectlogin.php");
echo "<h4>".$pagename."</h4>";
//if the value of the product id to be deleted (which was posted through the hidden field) is set
if (isset($_POST['del_prodid']))
{
    //capture the posted product id and assign it to a local variable $delprodid
    $delprodid=$_POST['del_prodid'];
    //unset the cell of the session for this posted product id variable
    unset ($_SESSION['basket'][$delprodid]);
    //display a "1 item removed from the basket" message
    echo " <p class='updateInfo'><b>1 item removed</b></p>";
}

//if the posted ID of the new product is set i.e. if the user is adding a new product into the basket
if (isset($_POST['h_prodid']))
{
    $newprodid=$_POST['h_prodid'];
    $reququantity=$_POST['p_quantity'];
    //Display id of selected product
    //Display quantity of selected product
    //create a new cell in the basket session array. Index this cell with the new product id.
    //Inside the cell store the required product quantity
    $_SESSION['basket'][$newprodid]=$reququantity;
    //Display "1 item added to the basket " message
    echo "<p class='updateInfo'><b>1 item added</b></p>";
}

$total=0;

echo "<p><table id='baskettable'>";
echo "<tr>";
echo "<th>Product Name</th><th>Price</th><th>Quantity</th><th>Subtotal</th><th>Remove Product</th>";
echo "</tr>";

if (isset($_SESSION['basket']))
{
    foreach($_SESSION['basket'] as $index => $value){
        $SQL="select prodId, prodName, prodPrice from Product where prodID =".$index;
        $exeSQL=mysqli_query($conn, $SQL) or die (mysqli_error());
        $arrayp=mysqli_fetch_array($exeSQL);


        echo "<tr>";
         //display product name & product price using array of records $arrayp
        echo "<td>".$arrayp['prodName']."</td>";
        echo "<td>&pound".number_format($arrayp['prodPrice'],2)."</td>";
        // display selected quantity of product retrieved from the cell of session array and now in $value
        echo "<td style='text-align:center;'>".$value."</td>";
        //calculate subtotal, store it in a local variable $subtotal and display it
        $subtotal=$arrayp['prodPrice'] * $value;
        echo "<td>&pound".number_format($subtotal,2)."</td>";
        echo "<form action='basket.php' method=post>";
        echo "<td>";
        echo "<input type='submit' value='Remove' id='submitbtn'>";
        echo "</td>";
        echo "<input type='hidden' name='del_prodid' value=".$arrayp['prodId'].">";
        echo "</form>";
        echo "</tr>";
        //increase total by adding the subtotal to the current total
        $total=$total+$subtotal;
    }

}

else
{
    echo "<p class='updateInfo'><b>Basket Empty</b></p>";

}

// Display total
echo "<tr>";
echo "<td colspan=4><b>TOTAL</b></td>";
echo "<td><b>&pound".number_format($total,2)."</b></td>";
echo "</tr>";
echo "</table>";

if (isset($_SESSION['basket']) and count($_SESSION['basket'])>0)
{
    echo "<br><p class='updateInfo'><a href='clearbasket.php'>CLEAR BASKET</a></p>";

    if (isset($_SESSION['userid']))
    {
        echo "<p class='updateInfo'><a href=checkout.php>CHECKOUT</a></p>";
    }
    else
    {
        echo "<br><p class='updateInfo'>New homteq Customer?<a href='signup.php'> Sign Up</a></p>";
        echo "<br><p class='updateInfo'>Already Have An Account?<a href='login.php'> Login</a></p>";
    }
}




include("footfile.html"); //include head layout
echo "</body>";
?>