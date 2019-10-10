<?php

namespace Tructt\HelloWorld\Model\ResourceModel\Post;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;
use Tructt\HelloWorld\Model\Post;
use Tructt\HelloWorld\Model\ResourceModel\Post as ResourceModelPost;

class Collection extends AbstractCollection
{
    protected $_idFieldName = 'article_id';
    protected $_eventPrefix = 'sm_article_collection';
    protected $_eventObject = 'article_collection';

    protected function _construct()
    {
        $this->_init(Post::class, ResourceModelPost::class);
    }
}