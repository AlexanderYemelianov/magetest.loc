<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 06.03.18
 * Time: 15:56
 */

namespace First\Hello\Controller\Hello;

use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;

class Index extends Action
{
    function __construct(Context $context){
        parent::__construct($context);
    }

    public function execute()
    {
        echo "Hello world!" . '<br>';

        $methods = get_class_methods(__CLASS__);
        var_dump($methods);

        $requestData = $this->getRequest();
        echo "\ngetParams()\n";
        var_dump($requestData->getParams());
        echo "\ngetParam('test')\n" . $requestData->getParam('test') . '<br>';
        echo '<br>' ."Modulename : " . $requestData->getModuleName() . '<br>';

        var_dump(get_class_methods($requestData));

//        var_dump( get_class_methods(\Psr\Log\LoggerInterface::class) );
    }
}