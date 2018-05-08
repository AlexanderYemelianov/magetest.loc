<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 13:24
 */

namespace Base\View\Model\ResourceModel;


class Post extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{

    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context
    )
    {
        parent::__construct($context);
    }

    protected function _construct()
    {
        $this->_init('base_view_post', 'post_id');
    }

}