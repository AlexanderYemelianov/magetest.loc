<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 19:01
 */

namespace Base\View\Model\ResourceModel;


class Topic extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('custom_topic', 'topic_id');
    }
}