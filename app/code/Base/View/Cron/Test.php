<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 16:03
 */

namespace Base\View\Cron;


class Test
{

    public function execute()
    {

        $writer = new \Zend\Log\Writer\Stream(BP . '/var/log/cron.log');
        $logger = new \Zend\Log\Logger();
        $logger->addWriter($writer);
        $logger->info(__METHOD__);

        return $this;

    }
}