<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 14:30
 */

namespace Base\View\Controller\Index;

use Magento\Framework\App\Action\Context;

class Index extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $_pageFactory;

    /**
     * @var  \Base\View\Model\PostFactory
     */
    private $_postFactory;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     * @param \Base\View\Model\PostFactory $postFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Base\View\Model\PostFactory $postFactory
    ) {
        $this->_pageFactory = $pageFactory;
        $this->_postFactory = $postFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        /**
         * @var \Base\View\Model\Post $post
         */
        $post = $this->_postFactory->create();
        $collection = $post->getCollection();

        foreach ($collection as $item) {
            echo "<pre>";
            print_r($item->getData());
            echo "</pre>";
        }

        return $this->_pageFactory->create();
    }
}