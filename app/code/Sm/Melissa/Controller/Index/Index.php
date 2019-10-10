<?php

namespace Sm\Melissa\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
use Magento\Framework\App\Request\Http;
use Tructt\HelloWorld\Model\ResourceModel\Post\CollectionFactory;

class Index extends Action
{
    public $_pageFactory;
    public $_postFactory;
    public $_request;

    public function __construct(Context $context, PageFactory $pageFactory, CollectionFactory $postFactory,Http $request)
    {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        $this->_request = $request;
        return parent::__construct($context);
    }

    public function execute()
    {
//        $post = $this->_postFactory->create();
//        foreach($post as $item){
//            echo "<pre>";
//            print_r($item->getData());
//            echo "</pre>";
//        }
//        exit();
        print_r($this->_request->getParams());die;
        return $this->_pageFactory->create();
    }
}


