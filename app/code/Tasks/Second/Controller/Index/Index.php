<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 19.03.18
 * Time: 10:24
 */

namespace Tasks\Second\Controller\Index;

use \Magento\Framework\App\Action\Action;
use \Magento\Framework\App\Action\Context;
use \Magento\Framework\View\Result\PageFactory;

class Index extends Action
{

    protected $_pageFactory;

    public function __construct(
        Context $context,
        PageFactory $pageFactory

    ) {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }

}