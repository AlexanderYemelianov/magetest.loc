<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20.03.18
 * Time: 11:48
 */

namespace Tasks\Second2\Block;


class Display extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function sayHello()
    {
        return __('Hello world');
    }
}