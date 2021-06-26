<?php
namespace TaskModule\TaskCustomizeHello\Block;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Custom extends \Magento\Framework\View\Element\Template
{
    const ENABLE = "helloworld/general/text_name";
    const DISPLAY_TEXT = "helloworld/general/textarea_disciption";

    //protected $arr;
    protected $scopeConfig;

    public function __construct(
        ScopeConfigInterface  $scopeConfig
	)
	{
        $this->scopeConfig = $scopeConfig;
	}


    public function getTitle()
    {
        // $enable = $this->scopeConfig->getValue(self::ENABLE, ScopeInterface::SCOPE_STORE);
        // $displayText = $this->scopeConfig->getValue(self::DISPLAY_TEXT, ScopeInterface::SCOPE_STORE);
        // // $arr=([''])
        // // echo $enable;
        // // echo "<br>";
        //  return $displayText;
        return "dsadsa";
    }
}