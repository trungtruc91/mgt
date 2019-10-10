<?php

namespace Tructt\HelloWorld\Block;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\View\Element\Template;
use \Magento\Framework\View\Element\Template\Context;

class Index extends Template
{
    public function __construct(Context $context)
    {
        return parent::__construct($context);
    }

    public function article()
    {
        return ['data'=>'hien tuong la'];
    }
}