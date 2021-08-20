<?php

namespace Adapters;

class RecordSaleOrderAdapter implements SaleOrder
{
    /**
     * @var RecordInterface
     */
    private $record;

    public function __construct(RecordInterface $record)
    {
        $this->record = $record;
    }

    public function getId(): string
    {
        return $this->record->getId();
    }

    public function getStatus(): string
    {
        return $this->record->getStatus();
    }
}