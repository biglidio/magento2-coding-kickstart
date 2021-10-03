<?php

namespace Biglidio\BestSelling\Controller\Me;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\ObjectManager;
use Magento\Framework\Controller\ResultFactory;
use Magento\Framework\HTTP\PhpEnvironment\Request;

class Index extends Action
{
    public function execute()
    {
        $result = $this->resultFactory->create(ResultFactory::TYPE_RAW);
        $objectManager = ObjectManager::getInstance();
        $customerSession = $objectManager->get('Magento\Customer\Model\Session');
        $customerId = $customerSession->getCustomerId();
        $result->setContents("customer_id: $customerId");
        return $result;
    }
}
