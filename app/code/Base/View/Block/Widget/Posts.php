<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 18:04
 */

namespace Base\View\Block\Widget;

use Magento\Framework\View\Element\Template;
use Magento\Widget\Block\BlockInterface;

class Posts extends Template implements BlockInterface {

    protected $_template = "widget/posts.phtml";

    private $_postFactory;

    public function __construct(
        \Base\View\Model\PostFactory $postFactory,
        \Magento\Framework\View\Element\Template\Context $context
    ) {
        parent::__construct($context);
        $this->_postFactory = $postFactory;
    }

    public function getPostCollection()
    {
        $post = $this->_postFactory->create();
        return $post->getCollection()->toArray();
    }

}