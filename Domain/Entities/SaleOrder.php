<?php

namespace Domain\Entities;

use Domain\Ports\SaleOrder as SaleOrderInterface;
class SaleOrder implements SaleOrderInterface
{
    private $id;
    private $status;

    public function __construct(string $id, string $status)
    {
        $this->id = $id;
        $this->status = $status;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function getStatus(): string
    {
        return $this->status;
    }
}