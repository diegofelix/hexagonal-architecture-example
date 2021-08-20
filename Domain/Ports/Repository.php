<?php

namespace Domain\Ports;

use Domain\Entities\SaleOrder;

interface Repository
{
    public function save(SaleOrder $saleOrder): bool;

    public function find(string $id): ?SaleOrder;
}