<?php

namespace Tructt\HelloWorld\Block;

use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;
use Tructt\HelloWorld\Model\ResourceModel\Post\CollectionFactory;
use Magento\Framework\App\Request\Http;

class Detail extends Template
{
    protected $_postFactory;
    protected $_request;

    public function __construct(Context $context, CollectionFactory $postFactory, Http $request)
    {
        $this->_postFactory = $postFactory;
        $this->_request = $request;

        return parent::__construct($context);
    }

    public function sayHello()
    {
        echo 'sdasdasdasd';
        exit();
    }

    function getDatas()
    {
        $id = $this->getParams('id');

        $collection = $this->_postFactory->create();
        $collection->addFieldToFilter('article_id', $id);


        $objs = $collection->getData();
        return $objs;
    }

    function getParams($field = '')
    {
        $params = $this->_request->getParams();
        if (isset($params[$field])) $params[$field];
        return 1;
    }
}