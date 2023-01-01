<?php

declare(strict_types=1);

namespace App\VillaPeruana\Products\Domain\Service;

use App\VillaPeruana\Products\Domain\Enums\ProductsEnum;
use App\VillaPeruana\Products\Domain\Models\CafeProduct;
use App\VillaPeruana\Products\Domain\Models\NormalProduct;
use App\VillaPeruana\Products\Domain\Models\PiscoProduct;
use App\VillaPeruana\Products\Domain\Models\TicketProduct;
use App\VillaPeruana\Products\Domain\Models\TumiProduct;

class ProductManager
{
    public function __construct() {}

    public function getProductInstance($name, $quality, $sellIn)
    {
        switch ($name) {
            case ProductsEnum::PISCO_PERUANO:
                return new PiscoProduct($name, $quality, $sellIn);
                break;
            case ProductsEnum::TUMI:
                return new TumiProduct($name, $quality, $sellIn);
                break;
            case ProductsEnum::NORMAL:
                return new NormalProduct($name, $quality, $sellIn);
                break;
            case ProductsEnum::TICKETS_VIP:
                return new TicketProduct($name, $quality, $sellIn);
                break;
            case ProductsEnum::CAFE:
                return new CafeProduct($name, $quality, $sellIn);
                break;
            default:
                throw new \InvalidArgumentException('Ingresó un producto no existente');
        }
    }
}