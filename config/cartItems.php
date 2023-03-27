<?php
$product_name = $_POST["product_name"];
$product_description = $_POST["product_description"];
$price = $_POST["price"];
$product_image = $_POST["product_image"];
$product_category = $_POST["product_category"];


$connection = new mysqli("localhost", "obinchu", "@Ibrahim1864", "artify");
// 3.check database connection
if ($connection->connect_error) {
    die("Connection to the database failed" + $connection->connect_error);
} else {
    // 4. write a query to manipulate the database.*Use the prepare method.
    $sqlquery = $connection->prepare("SELECT * FROM cart ");
    $sqlquery->execute();
    $result = $sqlquery->get_result();
    if ($result->num_rows == 0) {
        echo "<div class=\"empty-cart\">
                        <img src=\"https://img.icons8.com/cute-clipart/64/null/shopping-cart.png\"/>
                        <h2>Your Cart is Empty !!</h2>
                        <h3>Browse our Categories to Discover More</h3>
                        <a href=\"./landingpage.html#sec-2\"><button>MARKETPLACE</button></a>
                    </div>";
    }
    // echo $items;
}
