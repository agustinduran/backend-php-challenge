<?php

declare(strict_types=1);

namespace App\VillaPeruana\Products\Domain\Models;

use App\VillaPeruana\Products\Domain\Models\Contracts\ProductInterface;
use App\VillaPeruana\Products\Domain\Product;

class TumiProduct extends Product implements ProductInterface
{
    public function tick() {}
}