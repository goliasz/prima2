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

        $file = '/tmp/execute.log';
        $current = file_get_contents($file);
        $current .= $event_name;
        file_put_contents($file, $current);

        return;
    }

    public function dispatch(\Magento\Framework\Event\Observer $observer)
    {
        //$object = $observer->getEvent()->getObject();
        //if (!is_object($object)) {
        //    return;
        //}

        $event_name = $observer->getEventName();


        $file = '/tmp/dispatch.log';
        $current = file_get_contents($file);
        $current .= $event_name;
        file_put_contents($file, $current);


        return;
    }
}

