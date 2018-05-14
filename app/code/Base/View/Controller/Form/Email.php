<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 11:37
 */

namespace Base\View\Controller\Form;

class Email extends \Magento\Framework\App\Action\Action
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
        $email = $this->getRequest()->getParam('email');
        $order = $this->_objectManager->create('Magento\Sales\Model\Order')->load(1); // this is entity id
        $order->setCustomerEmail($email);
        if ($order) {
            try {
                $this->_objectManager->create('\Magento\Sales\Model\OrderNotifier')
                    ->notify($order);
                $this->messageManager->addSuccess(__('You sent the order email.'));
            } catch (\Magento\Framework\Exception\LocalizedException $e) {
                $this->messageManager->addError($e->getMessage());
            } catch (\Exception $e) {
                $this->messageManager->addError(__('We can\'t send the email order right now.'));
                $this->_objectManager->create('Magento\Sales\Model\OrderNotifier')->critical($e);
            }
        }

        return $this->_pageFactory->create();
    }

}