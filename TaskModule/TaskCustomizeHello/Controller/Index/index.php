<?php

namespace TaskModule\TaskCustomizeHello\Controller\Index;

use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends \Magento\Framework\App\Action\Action
{
    const ENABLE = "helloworld/general/text_name";
    const DISPLAY_TEXT = "helloworld/general/textarea_disciption";

    protected $scopeConfig;

	public function __construct(
		\Magento\Framework\App\Action\Context $context,
        ScopeConfigInterface  $scopeConfig
	)
	{
        $this->scopeConfig = $scopeConfig;
		return parent::__construct($context);
	}

	public function execute()
	{
        $enable = $this->scopeConfig->getValue(self::ENABLE, ScopeInterface::SCOPE_STORE);
        $displayText = $this->scopeConfig->getValue(self::DISPLAY_TEXT, ScopeInterface::SCOPE_STORE);
        echo $enable;
        echo "<br>";
        echo $displayText;
		// TODO: Implement execute() method.

		// echo $this->helperData->getGeneralConfig('enable');
		// echo $this->helperData->getGeneralConfig('display_text');
		// exit();

	}
}
