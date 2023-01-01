<?php

declare(strict_types=1);

namespace App;

use App\VillaPeruana\Products\Domain\Service\ProductManager;

class VillaPeruana
{
    public $name;
    public $quality;
    public $sellIn;

    public function __construct($name, $quality, $sellIn)
    {
        $this->name = $name;
        $this->quality = $quality;
        $this->sellIn = $sellIn;
    }

    public static function of($name, $quality, $sellIn) {
        $manager = new ProductManager();
        return $manager->getProductInstance($name, $quality, $sellIn);
    }

}
