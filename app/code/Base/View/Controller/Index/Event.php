<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 17:52
 */

namespace Base\View\Controller\Index;


class Event extends \Magento\Framework\App\Action\Action
{

    public function execute()
    {
        $textDisplay = new \Magento\Framework\DataObject(array('text' => 'Boring Mageplaza text example'));
        $this->_eventManager->dispatch('base_view_display_text', ['bv_text' => $textDisplay]);
        echo $textDisplay->getText();
        exit;
    }
}