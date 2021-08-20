<?php

namespace Adapters;

use Domain\Ports\Message;
use Domain\Service\Service;
use Metamorphosis\Kafka\RecordInterface;

class Kafka
{
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function handle(RecordInterface $record): void
    {
        $saleOrder = new SaleOrder(
            $record->getId(),
            $record->getStatus()
        );

        $this->service->save($saleOrder);
    }
}
