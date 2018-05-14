<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 11.05.18
 * Time: 14:33
 */

namespace Base\View\Plugin;

class ProductPlugin
{

    /**
     * @var \Psr\Log\LoggerInterface
     */
    private $logger;

    public function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    public function beforeGetProduct(\Magento\Catalog\Block\Product\View $subject)
    {
        // logging to test override
//        $this->logger->debug(__METHOD__ . ' - ' . __LINE__);
    }

    public function afterGetProduct(\Magento\Catalog\Block\Product\View $subject, $result)
    {
        // logging to test override
//        $this->logger->debug(__METHOD__ . ' - ' . __LINE__);

        return $result;
    }

    public function aroundGetProduct(\Magento\Catalog\Block\Product\View $subject, \Closure $proceed)
    {
        // logging to test override
        $logger = \Magento\Framework\App\ObjectManager::getInstance()->get('\Psr\Log\LoggerInterface');
//        $logger->debug(__METHOD__ . ' - ' . __LINE__);

        // call the core observed function
        $returnValue = $proceed();

        // logging to test override
//        $logger->debug(__METHOD__ . ' - ' . __LINE__);

        return $returnValue;
    }
}