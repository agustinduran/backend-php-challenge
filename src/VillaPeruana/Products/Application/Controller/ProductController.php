<?php

declare(strict_types=1);

use App\VillaPeruana\Products\Domain\Service\ProductManager;

class ProductController
{
    private ProductManager $productManager;

    public function __construct(ProductManager $productManager)
    {
        $this->productManager = $productManager;
    }

    public function create()
    {
        // Return JsonResponse for convert to API REST
    }
}