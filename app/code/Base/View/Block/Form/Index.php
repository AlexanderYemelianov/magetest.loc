<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 12:11
 */

namespace Base\View\Block\Form;


class Index extends \Magento\Framework\View\Element\Template
{
    /**
     * @var \Base\View\Model\PostFactory
     */
    private $_postFactory;

    const EMAIL_ACTION = 'front/form/email';

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Base\View\Model\PostFactory $postFactory
    ) {
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function getEmailAction()
    {
        return self::EMAIL_ACTION;
    }

    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection();
    }
}