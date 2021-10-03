<?php

namespace Biglidio\BestSelling\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;

class Index extends Action
{
    public function execute()
    {
        // DO ANY PRE-PROCESSING HERE

        // Get query param
        // Check if it exists
        // Call model with that param
        // Redirect or show error message depending upon result

        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
