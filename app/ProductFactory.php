<?php
namespace App;

require_once __DIR__ . "/../vendor/autoload.php";

use App\Car;

class ProductFactory
{
    const ProductTypes = [
        "Car" => Car::class,
    ];
    public static function createProduct(string $productType)
    {
        $className = self::ProductTypes[$productType];
        return new $className;
    }
}