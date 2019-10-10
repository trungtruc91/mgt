<?php

namespace Tructt\HelloWorld\Model;

use Magento\ImportExport\Model\AbstractModel;
use Magento\Framework\DataObject\IdentityInterface;

class Post extends AbstractModel implements IdentityInterface
{

    const CACHE_TAG = 'sm_artitcle';
    protected $_cacheTag = 'sm_artitcle';
    protected $_eventPrefix = 'sm_artitcle';

    protected function _construct()
    {
        $this->_init(ResourceModel\Post::class);
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];
        return $values;
    }
}

