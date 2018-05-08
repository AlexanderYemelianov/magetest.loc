<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 13:22
 */

namespace Base\View\Model;


class Post extends \Magento\Framework\Model\AbstractModel  implements \Magento\Framework\DataObject\IdentityInterface
{
    const CACHE_TAG = 'base_view_post';

    protected $_cacheTag = 'base_view_post';

    protected $_eventPrefix = 'base_view_post';

    protected function _construct()
    {
        $this->_init('Base\View\Model\ResourceModel\Post');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
        $values = [];

        return $values;
    }
}