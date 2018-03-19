<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 16.03.18
 * Time: 16:05
 */

namespace Unit3\HelloWorldBlock\Controller\HelloWorldBlock;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class IndexTest extends Action
{

    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory
    ){
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $layout = $this->_pageFactory->create()->getLayout();
        $block = $layout->createBlock('Unit3\HelloWorldBlock\Block\Test');
        $result = $this->resultFactory->create(\Magento\Framework\Controller\ResultFactory::TYPE_RAW);
        $result->setContents( $block->toHtml() );

        return $result;
    }
}