<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 15.03.18
 * Time: 14:56
 */

namespace Tasks\First\Model;

use \Magento\Framework\Model\AbstractModel;

class Model extends AbstractModel
{
    protected function _construct()
    {
        $this->_init('');
    }
}