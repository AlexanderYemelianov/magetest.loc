<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 19.03.18
 * Time: 10:38
 */

namespace Tasks\Second\Block;


use Magento\Framework\View\Element\Template;

class Display extends Template
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