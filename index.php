<?php
define("PAGE_TITLE", "Britas webshop");
include "header.php";

echo '<h3>Välkommen till vår webshop</h3>';
echo '<h1>Produkter</h1>';
echo '<hr>';

// Define three different products as array
$car = ["name" => "Volvo", "img" => 'https://picsum.photos/200', "price" => "12000"];
$dog = ["name" => "Fido", "img" => 'https://picsum.photos/199', "price" => "1000"];
$phone = ["name" => "iPhone", "img" => 'https://picsum.photos/201', "price" => "7000"];

// Insert the product-arrays into one array of all products
$products = [$car, $dog, $phone];

echo '<div class="row justify-content-center">';

// Creates a column for each product, with it's name, picture and price
foreach ($products as $product) {
    echo '<div class="col-md-3 mx-auto">';
    echo '<h3>' . $product['name'] . '</h3>';
    echo '<img class="p-3" src="' . $product['img'] . ' alt="product">';
    echo '<p class="p-3">Pris: ' . $product['price'] . 'kr</p>';
    // When pressing the button, send the chosen products info to next side (using GET)
    echo '<a href="order.php?name=' . $product['name'] . '&price=' . $product['price'] . '" class="btn btn-outline-info btn-block">Köp nu</a>';
    echo '</div>';
}

echo '</div>';

    // Print all arrays (only for troubleshooting)
    /*
    echo "<pre>";
    print_r($car);
    echo "</pre>";

    echo "<pre>";
    print_r($products);
    echo "</pre>";
    */

include "footer.php";
?>