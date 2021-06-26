<?php
namespace TaskModule\TaskAttributeProduct\Setup;

use Magento\Eav\Setup\EavSetup;
use Magento\Eav\Setup\EavSetupFactory;
use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
	private $eavSetupFactory;

	public function __construct(EavSetupFactory $eavSetupFactory)
	{
		$this->eavSetupFactory = $eavSetupFactory;
	}
	
	public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
	{
        $setup->startSetup();

		$eavSetup = $this->eavSetupFactory->create(['setup' => $setup]);
        $eavSetup->addAttribute(\Magento\Catalog\Model\Product::ENTITY, 'sales_name', [
            'group' => 'Sales',
            'type' => 'varchar',
            'backend' => '',
            'frontend' => '',
            'sort_order' => 200,
            'label' => 'Name Sale',
            'input' => 'text',
            'class' => '',
            'source' => '',
            'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
            'visible' => true,
            'required' => false,
            'user_defined' => false,
            'default' => '',
            'searchable' => false,
            'filterable' => false,
            'comparable' => false,
            'visible_on_front' => false,
            'used_in_product_listing' => true,
            'apply_to' => '',
        ]);

         //attribue Product
         $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'sales_type',
            [
                'group' => 'Sales',
                'type' => 'varchar',
                'backend' => '',
                'frontend' => '',
                'label' => 'Active sale type',
                'input' => 'select',
                'class' => '',
                'source' => '',
                'option'    => array(' ' => '---Select---',
                                     '0' => 'Fixed',
                                     '1' =>'Percent'
                                    ),
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => '',
            ]
        );
        //attribue Product
        $eavSetup->addAttribute(
            \Magento\Catalog\Model\Product::ENTITY,
            'sale_active',
            [
                'group' => 'Sales',
                'type' => 'int',
                'backend' => '',
                'frontend' => '',
                'label' => 'Active',
                'input' => 'boolean',
                'class' => '',
                'source' => 'Magento\Eav\Model\Entity\Attribute\Source\Boolean',
                'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                'visible' => true,
                'required' => false,
                'user_defined' => false,
                'default' => '',
                'searchable' => false,
                'filterable' => false,
                'comparable' => false,
                'visible_on_front' => false,
                'used_in_product_listing' => true,
                'unique' => false,
                'apply_to' => '',
            ]
        );

             //attribue Product
             $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'sale_events',
                [
                    'group' => 'Sales',
                    'type' => 'varchar',
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Sale Events',
                    'input' => 'multiselect',
                    'class' => '',
                    // 'source' => 'TaskModule\TaskAttributeProduct\Model\Source\SaleType',
                    'option'    =>['value' => 
                                            [
                                            'option_1'=>[ 
                                                0=> 'Black Friday'    
                                                ],
                                            'option_2'=>[
                                                0=> '30/4 - 1/5'
                                                ],
                                            ],
                                 ],
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => '',
                ]
            );

             //attribue Product
             $eavSetup->addAttribute(
                \Magento\Catalog\Model\Product::ENTITY,
                'sale_discription',
                [
                    'group' => 'Sales',
                    'type' => 'varchar',
                    'backend' => '',
                    'frontend' => '',
                    'label' => 'Sale Discription',
                    'input' => 'textarea',
                    'class' => '',
                    'source' => '',
                    'global' => \Magento\Eav\Model\Entity\Attribute\ScopedAttributeInterface::SCOPE_GLOBAL,
                    'visible' => true,
                    'required' => false,
                    'user_defined' => false,
                    'default' => '',
                    'searchable' => false,
                    'filterable' => false,
                    'comparable' => false,
                    'visible_on_front' => false,
                    'used_in_product_listing' => true,
                    'unique' => false,
                    'apply_to' => '',
                ]
            );


		  $setup->endSetup();
	}
}
