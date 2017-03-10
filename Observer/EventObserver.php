<?php

namespace goliasz\prima2\Observer;

use Magento\Framework\Event\ObserverInterface;

class EventObserver implements ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        //$object = $observer->getEvent()->getObject();
        //if (!is_object($object)) {
        //    return;
        //}

        $event_name = $observer->getEventName();
        return;
    }

    public function dispatch(\Magento\Framework\Event\Observer $observer)
    {
        //$object = $observer->getEvent()->getObject();
        //if (!is_object($object)) {
        //    return;
        //}

        $event_name = $observer->getEventName();
        return;
    }
}

