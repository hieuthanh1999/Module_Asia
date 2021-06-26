<?php
 
namespace TaskModule\TaskProduct\Observer;
 
use Magento\Framework\Event\Observer;
use \Magento\CatalogInventory\Model\Stock\Item;

class Save implements \Magento\Framework\Event\ObserverInterface
{

 /**
     * @param \Magento\Sales\Model\OrderFactory
     */
    private $_orderFactory;
    
    /**
     * @param \Magento\Sales\Model\ResourceModel\OrderFactory
     */
    private $_productFactory;

 /**
     * @var Item
     */
    protected $stockItem;

    protected $_stockItemRepository;

    public function __construct( \Magento\Sales\Model\OrderFactory $orderFactory,
                                    \Magento\Catalog\Model\ProductFactory $productFactory,
                                    Item $stockItem,
                                    \Magento\CatalogInventory\Model\Stock\StockItemRepository $stockItemRepository
    )
    {
        $this->_stockItemRepository = $stockItemRepository;
        $this->stockItem = $stockItem;
        $this->_orderFactory = $orderFactory;
        $this->_productFactory = $productFactory;
    }
    
    public function execute(Observer $observer)
    {

    //      /** @var \Magento\Sales\Model\Order $order */
    //      $order_ids = $observer->getEvent()->getData('order_ids');
    //      $order = $this->_orderFactory->create()->load($order_ids);
    //     foreach ($order->getAllItems() as $item) {
    //      $product = $this->_productFactory->create()->load($item->getProductId());
    //     // $stockItem = $this->stockItem->load('product_id', $item->getProductId());
    //     // $stockItem = $this->F->get($item->getProductId());
    //     // if(emtity($product->('sale_agent_id')))
    //     // {
    //         echo $item->getProductId();
    //         if($item->getProductId()){
    //             $productQty = $this->_stockItemRepository->get($item->getProductId())->getQty();
    //             echo "<pre>";
    //             var_dump($product->getTypeId());
    //             var_dump($product->getStatus());
    //            var_dump($productQty);

    //             if($productQty == 0){
    //                 $product->setStatus('0');
    //             }

    //            }
               
    //             die;
    //             return;
    //    // }
       //  }
       
    }
}
