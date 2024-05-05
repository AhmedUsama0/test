<?php
namespace App;

require_once __DIR__ . "/../vendor/autoload.php";


use App\Product;

class Car extends Product
{
    private $attr;

    public function setAttr(string $attr): void
    {
        $this->attr = $attr;
    }
    public function getAttr()
    {
        return $this->attr;
    }
}