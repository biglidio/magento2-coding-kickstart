<?php

namespace Biglidio\BestSelling\Setup\Patch\Data;

use Biglidio\BestSelling\Model\ResourceModel\Sales\Bestsellers as BestsellersResourceModel;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\Patch\DataPatchInterface;

class PopulateBestsellersRecords implements DataPatchInterface
{
    /** @var ModuleDataSetupInterface */
    protected $moduleDataSetup;

    public function __construct(ModuleDataSetupInterface $moduleDataSetup)
    {
        $this->moduleDataSetup = $moduleDataSetup;
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
        $table = $setup->getTable(BestsellersResourceModel::MAIN_TABLE);

        $setup->getConnection()->insert($table, [
            'id' => 1,
            'is_featured' => true
        ]);

        $setup->getConnection()->insert($table, [
            'id' => 3,
            'is_featured' => true
        ]);

        $setup->endSetup();
    }
}
