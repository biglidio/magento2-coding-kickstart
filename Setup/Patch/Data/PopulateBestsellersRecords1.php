<?php

namespace Biglidio\BestSelling\Setup\Patch\Data;

use Biglidio\BestSelling\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;
use Biglidio\BestSelling\Model\Sales\Bestsellers as BestsellersModel;
use Biglidio\BestSelling\Model\Sales\BestsellersFactory;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBestsellersRecords1 implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    protected $moduleDataSetup;

    /** @var BestsellersResourceModel */
    protected $bestsellersResource;

    /** @var BestsellersFactory */
    protected $bestsellersFactory;

    public function __construct(
        ModuleDataSetupInterface $moduleDataSetup,
        BestsellersResourceModel $bestsellersResource,
        BestsellersFactory $bestsellersFactory
    ) {
        $this->moduleDataSetup = $moduleDataSetup;
        $this->bestsellersResource = $bestsellersResource;
        $this->bestsellersFactory = $bestsellersFactory;
    }

    public static function getDependencies()
    {
        return [];
    }

    public function getAliases()
    {
        return [];
    }

    public function apply()
    {
        $setup = $this->moduleDataSetup;
        $setup->startSetup();

        /** @var BestsellersModel $bestsellers */
        $bestsellers = $this->bestsellersFactory->create();
        $data = [
            'id' => 5,
            'is_featured' => true,
        ];
        $bestsellers->setData($data);
        $this->bestsellersResource->save($bestsellers);

        $setup->endSetup();
    }
}
