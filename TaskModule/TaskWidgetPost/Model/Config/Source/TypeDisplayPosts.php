<?php
namespace TaskModule\TaskWidgetPost\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class TypeDisplayPosts implements ArrayInterface
{
   public function toOptionArray()
   {
       $options = [
           [
               'value' => '0',
               'label' => __('Grid')
           ],
           [
               'value' => '1',
               'label' => __('List')
           ],
       ];

       return $options;
   }
}