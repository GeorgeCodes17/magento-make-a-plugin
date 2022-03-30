<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Training\ExamplePlugin\Plugin;

use Magento\Catalog\Model\Product;

class Execution
{
    public function afterGetQuoteData()
    {
        return $items = 10;
    }
}
