<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 19.03.18
 * Time: 18:03
 */

namespace Tasks\Third\Block;


class CustomAttribute extends \Magento\Framework\View\Element\Template
{
    public function __construct(\Magento\Framework\View\Element\Template\Context $context, array $data = [])
    {
        parent::__construct($context, $data);
    }

    public function getCustomAttr()
    {
        return __('Custom Attr');
    }
}