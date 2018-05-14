<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 19:08
 */

namespace Base\View\Model\ResourceModel\Topic;


class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected function _construct()
    {
        $this->_init('Base\View\Model\Topic', 'Base\View\Model\ResourceModel\Topic');
    }
}