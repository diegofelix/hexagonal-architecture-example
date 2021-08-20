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
    public function get(string $id)
    {
        $saleOrder = $this->service->findById($id);

        return $this->respondAsJson($saleOrder);
    }

    public function save(Request $request)
    {
        $saleOrder = new RequestSaleOrderAdapter($request);

        if ($this->service->save($saleOrder)) {
            return $this->respondAsJson($saleOrder);
        }

        return $this->respondWithError('cannot save sale order');
    }
}