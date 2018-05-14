<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 11:37
 */

namespace Base\View\Controller\Form;

class Index extends \Magento\Framework\App\Action\Action
{
    protected $_pageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    public function execute()
    {
        return $this->_pageFactory->create();
    }

}