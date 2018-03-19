<?php
/**
 * ACL. Can be queried for relations between roles and resources.
 *
 * Copyright В© 2017 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Unit3\HelloWorldBlock\Controller\HelloWorldBlock;

/**
 * Class Index
 * @package Unit3\HelloWorldBlock\Controller\Block
 */
class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    /**
     * return result
     */
    public function execute()
    {
        /*$layout = $this->_pageFactory->create()->getLayout();
        $block = $layout->createBlock('Unit3\HelloWorldBlock\Block\Test');
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents($block->toHtml());
        return $result;*/

        $block = $this->_pageFactory->create()->getLayout()->createBlock('Magento\Framework\View\Element\Text');
        $block->setText("<b>Hello World From New Module!</b>");
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents($block->toHtml());

        return $result;
    }
}