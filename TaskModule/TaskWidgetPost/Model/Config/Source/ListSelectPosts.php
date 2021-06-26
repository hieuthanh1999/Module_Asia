<?php
namespace TaskModule\TaskWidgetPost\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class ListSelectPosts implements ArrayInterface
{
    protected  $_options;
    private $_postFactory;
    public function __construct(
       \TaskModule\TaskWidgetPost\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
    }

   public function toOptionArray()
   {
       
       if ($this->_options === null) {
        $post = $this->_postFactory->create()->getCollection()->getData();
            foreach ($post as $item) {
                $this->_options[] = [
                    'label' => $item['title'],
                    'value' => $item['id'],
                ];
            }
        }
        return $this->_options;
   }
}