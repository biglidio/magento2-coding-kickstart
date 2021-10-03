<?php

namespace Biglidio\BestSelling\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\HTTP\PhpEnvironment\Request;

class Index extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        /** @var Request $request */
        $request = $this->getRequest();
        $result->setContents($request->getControllerName());
        return $result;
    }
}
