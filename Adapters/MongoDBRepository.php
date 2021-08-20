<?php

namespace Adapters;

use Domain\Entities\SaleOrder;
use Framework\Models\SaleOrder as SaleOrderModel;

class MongoDBRepository implements Repository
{
    public function save(SaleOrder $saleOrder): bool
    {
        return SaleOrderModel::create([
            '_id' => $saleOrder->getId(),
            'status' => $saleOrder->getStatus()
        ]);
    }

    public function find(string $id): ?SaleOrder
    {
        $model = SaleOrderModel::find($id);

        return new SaleOrder($model->_id, $model->status);
    }
}