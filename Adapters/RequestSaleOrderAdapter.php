<?php

namespace Adapters;

use Framework\Request;
use Domain\Ports\SaleOrder;

class RequestSaleOrderAdapter implements SaleOrder
{
    /**
     * @var Request
     */
    private $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }

    public function getId(): string
    {
        return $this->request->get('id');
    }

    public function getStatus(): string
    {
        return $this->request->get('status');
    }
}