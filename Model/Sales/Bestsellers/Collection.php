<?php

namespace Biglidio\BestSelling\Model\Sales\Bestsellers;

use Biglidio\BestSelling\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;
use Biglidio\BestSelling\Model\Sales\Bestsellers as BestsellersModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    public function _construct()
    {
        $this->_init(BestsellersModel::class, BestsellersResourceModel::class);
    }
}