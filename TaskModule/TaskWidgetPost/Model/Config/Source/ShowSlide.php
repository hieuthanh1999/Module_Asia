<?php
namespace TaskModule\TaskWidgetPost\Model\Config\Source;

use Magento\Framework\Option\ArrayInterface;

class ShowSlide implements ArrayInterface
{
   public function toOptionArray()
   {
       $options = [
           [
               'value' => '0',
               'label' => __('No')
           ],
           [
               'value' => '1',
               'label' => __('Yes')
           ],
       ];

       return $options;
   }
}