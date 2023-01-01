<?php

declare(strict_types=1);

namespace App\VillaPeruana\Products\Domain\Repository;

use App\VillaPeruana\Products\Domain\Product;

// TODO: a implementar si se aplicara una base de datos
interface ProductRepository
{
    public function save(Product $product): void;
}