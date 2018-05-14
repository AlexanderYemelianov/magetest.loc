<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 11.05.18
 * Time: 14:03
 */

namespace Base\View\Controller\Cookie;


class Read extends \Magento\Framework\App\Action\Action
{
    CONST COOKIE_NAME = 'form_key';
    /**
     * @var \Magento\Framework\Stdlib\CookieManagerInterface
     */
    protected $_cookieManager;
    /**
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\Stdlib\CookieManagerInterface $cookieManager
    ) {
        $this->_cookieManager = $cookieManager;
        parent::__construct($context);
    }

    public function execute()
    {
        $cookieValue = $this->_cookieManager->getCookie(self::COOKIE_NAME);
        echo($cookieValue);
    }
}