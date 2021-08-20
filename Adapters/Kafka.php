<?php

namespace Adapters;

use Domain\Ports\Message;
use Domain\Service\Service;
use Metamorphosis\Kafka\AvroTransformer;
use Metamorphosis\Kafka\Dispatcher;

class Kafka implements Message
{
    private $avro;
    private $dispatcher;

    public function __construct(AvroTransformer $avro, Dispatcher $dispatcher, Service $service)
    {
        $this->service = $service;
        $this->avro = $avro;
        $this->dispatcher = $dispatcher;
    }

    public function send(SaleOrder $saleOrder): bool
    {
        $payload = $this->avro->transform($saleOrder);

        $this->dispatcher->send($payload);
    }

    public function receive(array $record): SaleOrder
    {
        $saleOrder = $this->avro->transform($record);

        $this->service->save($saleOrder);
    }
}