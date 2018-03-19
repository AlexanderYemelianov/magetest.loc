<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 07.03.18
 * Time: 16:52
 */

namespace Unit2\RoutersLog\App;

use Magento\Framework\App\FrontController as MagentoFrontController;

class FrontController extends MagentoFrontController
{
    protected $_routerList;
    protected $logger;
    protected $response;

    public function __construct(
        \Magento\Framework\App\RouterList $routerList,
        \Magento\Framework\App\Response\Http $response,
        \Psr\Log\LoggerInterface $logger)
    {
        $this->_routerList = $routerList;
        $this->response = $response;
        $this->logger = $logger;
    }

    public function dispatch(\Magento\Framework\App\RequestInterface $request)
    {
        foreach ($this->_routerList as $router){
            $this->logger->info("\nCustom event\nGet router list: " . get_class($router) );
            $this->logger->addDebug("\nCustom event\nGet router list: " . get_class($router) );
        }
        return parent::dispatch($request);
    }

}