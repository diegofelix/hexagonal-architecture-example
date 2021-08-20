<?php

namespace Domain\Ports;

interface SaleOrder
{
    public function getId(): string;

    public function getStatus(): string;
}