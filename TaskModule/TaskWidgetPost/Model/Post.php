<?php
namespace TaskModule\TaskWidgetPost\Model;


class Post extends \Magento\Framework\Model\AbstractModel{

    const CACHE_TAG = 'aht_post';

    protected $_cacheTag = 'aht_post';

    protected $_eventPrefix = 'aht_post';

    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource=null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection=null,
        array $data = []
    ) {
        parent::__construct($context, $registry, $resource, $resourceCollection, $data);
    }

    /**
     * @return void
     */

    public function _construct()
    {
        $this->_init('TaskModule\TaskWidgetPost\Model\ResourceModel\Post');
    }
}