<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 18:50
 */

namespace Base\View\Model;

class Topic extends \Magento\Framework\Model\AbstractModel implements \Magento\Framework\DataObject\IdentityInterface,
    \Base\View\Model\Api\Data\TopicInterface
{
    const CACHE_TAG = 'custom_topic';

    protected function _construct()
    {
        $this->_init('Mageplaza\HelloWorld\Model\ResourceModel\Topic');
    }

    public function getIdentities()
    {
        return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getTitle()
    {
        // TODO: Implement getTitle() method.
    }

    public function setTitle()
    {
        // TODO: Implement setTitle() method.
    }

    public function getContent()
    {
        // TODO: Implement getContent() method.
    }

    public function setContent()
    {
        // TODO: Implement setContent() method.
    }

    public function getCreationTime()
    {
        // TODO: Implement getCreationTime() method.
    }

    public function setCreationTime()
    {
        // TODO: Implement setCreationTime() method.
    }

}