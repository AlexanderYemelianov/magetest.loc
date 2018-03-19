<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 19.03.18
 * Time: 15:27
 */

namespace Tasks\Third\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{

    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    ){
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }
}