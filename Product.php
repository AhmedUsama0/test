<?php
require __DIR__ . "/vendor/autoload.php";

use App\ProductFactory;


// * data from the user
$productType = "Car";
$sku = "fsdfsdf";
$price = 3232;
$name = "volvo";
$attr = "attr";

$product = ProductFactory::createProduct($productType);

$product->setSku($sku);
$product->setPrice($price);
$product->setName($name);
$product->setAttr($attr);

echo "the car sku is " . $product->getSku() . " and its price is " . $product->getPrice();