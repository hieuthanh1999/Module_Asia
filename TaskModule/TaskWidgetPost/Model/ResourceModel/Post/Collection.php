<?php
namespace TaskModule\TaskWidgetPost\Model\ResourceModel\Post;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'id';
    protected $_eventPrefix = 'posts_collection';
    protected $_eventObject = 'posts_collection';

    /**
     * Define the resource model & the model.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('TaskModule\TaskWidgetPost\Model\Post', 'TaskModule\TaskWidgetPost\Model\ResourceModel\Post');
    }
}