<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 07.03.18
 * Time: 15:05
 */

namespace Unit2\LogHtml\Observer;

use Magento\Framework\Event\ObserverInterface;
use Magento\Framework\Event\Observer;

class LogHtml implements ObserverInterface
{

    /**
     * @var null|\Psr\Log\LoggerInterface
     */
    protected $logger = null;

    /**
     * LogHtml constructor.
     * @param \Psr\Log\LoggerInterface $logger
     */
    function __construct(\Psr\Log\LoggerInterface $logger)
    {
        $this->logger = $logger;
    }

    /**
     * @param Observer $observer
     */
    public function execute(Observer $observer)
    {
        $response = $observer->getEvent()->getData('response');
        $body = $response->getBody();
        $this->logger->info("--------\n\n\n MY BODY \n\n\n ". $body);
//        $this->logger->addDebug("--------\n\n\n BODY \n\n\n ". $body);
    }
}