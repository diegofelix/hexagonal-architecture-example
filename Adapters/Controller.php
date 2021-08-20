<?php

namespace Adapters;

use Domain\Service\Service;
use Framework\Controller as FrameworkController;
use Framework\Request;

class Controller extends FrameworkController
{
    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    /**
     * @get /sale-orders/{id}
     */
    public function get(Request $request)
    {
        $saleOrder = $this->service->findById($request->input('id'));

        return $this->respondAsJson($saleOrder);
    }
}