<?php

namespace Domain\Ports;

use Domain\Entities\SaleOrder;

interface Message
{
    public function send(SaleOrder $saleOrder): bool;

    public function receive(array $payload): void;
}