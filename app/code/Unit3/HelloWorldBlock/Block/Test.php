<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 16.03.18
 * Time: 16:19
 */

namespace Unit3\HelloWorldBlock\Block;

use \Magento\Framework\View\Element\AbstractBlock;

class Test extends AbstractBlock
{
    protected function _toHtml()
    {
        return "<h3>Hello World Block.</h3>";
    }
}