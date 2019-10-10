<?php

namespace Tructt\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

use \Tructt\HelloWorld\Helper\Data;

class Display extends Action
{
    public $_pageFactory;
    protected $_helperData;

    public function __construct(Context $context, PageFactory $pageFactory, Data $helperData)
    {
        $this->_pageFactory = $pageFactory;
        $this->_helperData = $helperData;
        return parent::__construct($context);
    }

    public function execute()
    {
        $isDisplay = $this->_helperData->getGeneralConfig('enable');
        if (!$isDisplay) {
            $this->_redirect('/');
        }
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Display'));
        return $resultPage;
    }

}


