<?php
namespace Scool\Inventory\Presenters;
use Prettus\Repository\Presenter\FractalPresenter;
use Scool\Inventory\Models\Inventory;
use Scool\Inventory\Transformers\AssesmentTransformer;

/**
 * Class AssesmentPresenter
 * @package Scool\Inventory\Presenters
 */
class InventoryPresenter extends FractalPresenter
{
    /**
     * Transformer
     *
     *
     */
    public function getTransformer()
    {
        return new InventoryTransformer();
    }
}