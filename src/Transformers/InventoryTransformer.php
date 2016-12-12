<?php

namespace Scool\Inventory\Transformers;

use League\Fractal\TransformerAbstract;

/**
 * Class InventoryTransformer.
 */
class InventoryTransformer extends TransformerAbstract
{
    /**
     * Transform the \Inventory entity.
     *
     * @param \Inventory $model
     *
     * @return array
     */
    public function transform(Inventory $model)
    {
        return [
            'id'         => (int) $model->id,
            /* place your other model properties here */
            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at,
        ];
    }
}
