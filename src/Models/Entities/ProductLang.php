<?php

namespace WalkerChiu\MallShelf\Models\Entities;

use WalkerChiu\Core\Models\Entities\Lang;

class ProductLang extends Lang
{
    /**
     * Create a new instance.
     *
     * @param Array  $attributes
     * @return void
     */
    public function __construct(array $attributes = [])
    {
        $this->table = config('wk-core.table.mall-shelf.products_lang');

        parent::__construct($attributes);
    }
}
