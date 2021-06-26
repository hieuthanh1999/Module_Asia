<?php 
namespace TaskModule\TaskWidgetPost\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface; 
 
class Posts extends Template implements BlockInterface {

	
	protected $_template = "widget/posts.phtml";
	private $_collectionFactory;
	private $_postFactory;


    public function __construct(
		Template\Context $context, 
		\TaskModule\TaskWidgetPost\Model\PostFactory $postFactory,
		\TaskModule\TaskWidgetPost\Model\ResourceModel\Post\CollectionFactory $collectionFactory,
		array $data = []
    ) {
		$this->_postFactory = $postFactory;
		$this->_collectionFactory = $collectionFactory;
		parent::__construct($context, $data);
    }

	public function getPost(){
		$post = $this->_postFactory->create()->getCollection()->getData();
		return $post;
	}

	public function getPostId($id){
		$post = $this->_postFactory->create()->load($id)->getData();
		return $post;
	}


	public function getNumberPost($number_posts){
		$postNumber = $this->_collectionFactory->create()->setPageSize($number_posts);
		return $postNumber;
	}

	

}