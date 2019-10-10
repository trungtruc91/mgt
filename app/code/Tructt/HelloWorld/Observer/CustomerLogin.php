<?php

namespace Tructt\HelloWorld\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;
class CustomerLogin implements ObserverInterface
{
    public function execute(Observer $observer)
    {
        $account = $observer->getEvent()->getData('account_controller');
        $customer = $observer->getEvent()->getData('customer');
        var_dump($customer) ;die;
    }
}