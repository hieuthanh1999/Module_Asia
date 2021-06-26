<?php
namespace TaskModule\TaskWidgetPost\Setup;

use Magento\Framework\Setup\InstallDataInterface;
use Magento\Framework\Setup\ModuleContextInterface;
use Magento\Framework\Setup\ModuleDataSetupInterface;

class InstallData implements InstallDataInterface
{
    protected $_postFactory;

    public function __construct(\TaskModule\TaskWidgetPost\Model\PostFactory $postFactory)
    {
        $this->_postFactory = $postFactory;
    }

    public function install(ModuleDataSetupInterface $setup, ModuleContextInterface $context)
    {

        $data = [
            'title'          => "Post Test", 
            'dicription'     => "Hi, I'm Thành"
        ];
        $post = $this->_postFactory->create();
        $post->addData($data)->save();
    }
}
?>
