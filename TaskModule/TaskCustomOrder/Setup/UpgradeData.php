<?php

namespace TaskModule\TaskCustomOrder\Setup;

use Magento\Customer\Setup\CustomerSetupFactory;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;
use Magento\Framework\Setup\UpgradeDataInterface;

class UpgradeData implements UpgradeDataInterface
{

    /**
     * {@inheritdoc}
     */
    public function upgrade(
        ModuleDataSetupInterface $setup,
        ModuleContextInterface $context
    ) {

        // $customerSetup = $this->customerSetupFactory->create(['setup' => $setup]);

        //   if (version_compare($context->getVersion(), '1.0.10') < 0) {

        //     $installer = $setup;
        //     $installer->startSetup();
            
        //     $arr =[        
        //         'order_comment' =>[ 
        //                                 'type' => 'text',
        //                                 'nullable' => false,
        //                                 'comment' => 'Order Comment',
        //                             ]
        //     ];
        //    foreach($arr as $key => $value){
        //         $installer->getConnection()->addColumn($installer->getTable('quote'),$key,$value);
        //         $installer->getConnection()->addColumn($installer->getTable('sales_order'),$key,$value);
        //    }
        //     $setup->endSetup();

        //   }
    }
}