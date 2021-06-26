<?php
namespace TaskModule\TaskWidgetPost\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;
    protected $_postFactory;
    protected $_collectionFactory;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     */
    public function __construct(
       \Magento\Framework\App\Action\Context $context,
       \Magento\Framework\View\Result\PageFactory $pageFactory,
       \TaskModule\TaskWidgetPost\Model\PostFactory $postFactory,
       \TaskModule\TaskWidgetPost\Model\ResourceModel\Post\CollectionFactory $collectionFactory
    )
    {
        $this->_postFactory = $postFactory;
        $this->_pageFactory = $pageFactory;
        $this->_collectionFactory = $collectionFactory;
        return parent::__construct($context);
    }
    /**
     * View page action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        $post = $this->_postFactory->create()->getCollection()->getData();
        $postid = $this->_collectionFactory->create()->setPageSize(1);
        var_dump($postid->getData());
        // foreach ($post as $item) {
        //         var_dump($item['title']);
        // }
        die;
        //return $this->_pageFactory->create();
    }
}