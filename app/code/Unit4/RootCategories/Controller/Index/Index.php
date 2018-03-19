<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 15.03.18
 * Time: 12:40
 */

namespace Unit4\RootCategories\Controller\Index;


class Index extends \Magento\Framework\App\Action\Action
{

    /*public function __construct(\Magento\Framework\App\Action\Context $context)
    {
        parent::__construct($context);
    }*/

    public function execute()
    {
        /**
         * @return \Magento\Framework\View\Result\Page
         */
        return $this->resultFactory->create('page');
    }
}