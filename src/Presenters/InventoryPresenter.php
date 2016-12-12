<?php

namespace Scool\Inventory\Presenters;

use Prettus\Repository\Presenter\FractalPresenter;

/**
 * Class AssesmentPresenter.
 */
class InventoryPresenter extends FractalPresenter
{
    /**
     * Transformer.
     */
    public function getTransformer()
    {
        return new InventoryTransformer();
    }
}
