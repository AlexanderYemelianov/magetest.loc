<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 17:57
 */

namespace Base\View\Observer;


class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
    public function execute(\Magento\Framework\Event\Observer $observer)
    {
        $displayText = $observer->getData('bv_text');
        echo $displayText->getText() . " - Event </br>";
        $displayText->setText('Wubba-lubba-dub-dub!');

        return $this;
    }
}