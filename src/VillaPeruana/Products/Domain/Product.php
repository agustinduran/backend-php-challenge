<?php

declare(strict_types=1);

namespace App\VillaPeruana\Products\Domain;

class Product
{
    public string $name;
    public int    $quality;
    public int    $sellIn;

    const MAX_QUALITY = 50;
    const MIN_QUALITY = 0;

    public function __construct(
        string $name,
        int    $quality,
        int    $sellIn
    )
    {
        $this->name    = $name;
        $this->quality = $quality;
        $this->sellIn  = $sellIn;
    }

}