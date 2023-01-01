<?php

declare(strict_types=1);

namespace App\VillaPeruana\Products\Domain\Models;

use App\VillaPeruana\Products\Domain\Models\Contracts\ProductInterface;
use App\VillaPeruana\Products\Domain\Product;

class TicketProduct extends Product implements ProductInterface
{
    public function tick()
    {
        $this->sellIn -= 1;

        if ($this->sellIn < 10 && $this->sellIn > 5)
            $this->quality += 2;
        else if ($this->sellIn <= 5 && $this->sellIn >= 0)
            $this->quality += 3;
        else if ($this->sellIn < 0)
            $this->quality = 0;
        else
            $this->quality += 1;
        
        if      ($this->quality < self::MIN_QUALITY) $this->quality = self::MIN_QUALITY;
        else if ($this->quality > self::MAX_QUALITY) $this->quality = self::MAX_QUALITY;
    }
}