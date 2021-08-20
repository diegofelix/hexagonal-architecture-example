<?php

namespace Domain\Service;

use Domain\Ports\Repository;
use Domain\Entities\SaleOrder;

class Service
{
    private $repository;

    public function __construct(Repository $repository)
    {
        $this->repository = $repository;
    }

    public function findById(string $id): bool
    {
        return $this->repository->find($id);
    }

    public function save(SaleOrder $saleOrder): bool
    {
        return $this->repository->save($saleOrder);
    }
}