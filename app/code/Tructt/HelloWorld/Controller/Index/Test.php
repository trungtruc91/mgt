<?php

namespace Tructt\HelloWorld\Controller\Index;

use Magento\Framework\App\Action\Action;
use Magento\Framework\DataObject;

class Test extends Action
{

    public function execute()
    {
        $textDisplay = DataObject(['text' => 'Tructt']);
        $this->_eventManager->dispatch('events_helloworld_display_text', ['tt_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}


