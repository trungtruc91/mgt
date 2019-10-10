<?php

namespace Tructt\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Request\Http;
use Tructt\HelloWorld\Model\ResourceModel\Post\CollectionFactory;

class Detail extends Action
{
    public $_pageFactory;
    public $_postFactory;
    public $_request;

    public function __construct(Context $context, PageFactory $pageFactory, CollectionFactory $postFactory, Http $request)
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->_request = $request;
        return parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->set(__('Detail'));
        return $resultPage;
    }


}


