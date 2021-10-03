<?php

namespace Biglidio\BestSelling\Plugin;

use Magento\Catalog\Block\Product\ProductList\Toolbar;

class AddBestSellersToToolbarAvailableOrders
{
    public function afterGetAvailableOrders(Toolbar $subject, $result)
    {
        $result['bestsellers'] = 'Biglidio - Best Sellers';
        return $result;
    }
}