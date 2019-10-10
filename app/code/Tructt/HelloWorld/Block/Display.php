<?php

namespace Tructt\HelloWorld\Block;

use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Tructt\HelloWorld\Model\ResourceModel\Post\CollectionFactory;
use \Tructt\HelloWorld\Helper\Data;

class Display extends Template
{
    protected $_postFactory;
    protected $_helperData;

    public function __construct(Context $context, CollectionFactory $postFactory, Data $helperData)
    {
        $this->_postFactory = $postFactory;
        $this->_helperData = $helperData;
        return parent::__construct($context);
    }

    protected function _prepareLayout()
    {
        parent::_prepareLayout();
        $this->pageConfig->getTitle()->set(__('Display'));
        if ($this->loadAllArticles()) {
            $pager = $this->getLayout()->createBlock(
                'Magento\Theme\Block\Html\Pager',
                'test.news.pager'
            )->setAvailableLimit(array(1 => 1, 2 => 2, 3 => 3))->setShowPerPage(false)->setCollection(
                $this->loadAllArticles()
            );
            $this->setChild('pager', $pager);
            $this->loadAllArticles()->load();
        }
        return $this;
    }

    public function getPagerHtml()
    {
        return $this->getChildHtml();
    }

    public function sayHello()
    {
        echo 'sdasdasdasd';
        exit();
    }

    function loadAllArticles()
    {
        $pageSize = $this->_helperData->getGeneralConfig('display_text');
        $page = ($this->getRequest()->getParam('page')) ? $this->getRequest()->getParam('page') : 1;
//        $pageSize = ($this->getRequest()->getParam('limit')) ? $this->getRequest()->getParam('limit') : 2;

        $collection = $this->_postFactory->create();
        $collection->addFieldToFilter('article_id', array('gt' => 0));
        $collection->setOrder('article_id', 'ASC');
        $collection->setPageSize($pageSize);
        $collection->setCurPage($page);
//        $objs = $collection->getData();

//        return ['datas' => $objs, 'page' => $page];
        return $collection;
        return $objs;
    }


    function getParams($field = '')
    {
        $params = $this->_request->getParams();
        if (isset($params[$field])) {
            return $params[$field];
        }
        return '';
    }
}
