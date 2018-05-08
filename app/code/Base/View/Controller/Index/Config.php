<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 14:30
 */

namespace Base\View\Controller\Index;

use Magento\Framework\App\Action\Context;

class Config extends \Magento\Framework\App\Action\Action
{
    /**
     * @var \Base\View\Helper\Data
     */
    private $_dataHelper;

    /**
     * Index constructor.
     * @param Context $context
     * @param \Base\View\Helper\Data $dataHelper
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Base\View\Helper\Data $dataHelper
    ) {
        $this->_dataHelper = $dataHelper;
        parent::__construct($context);
    }

    public function execute()
    {
        echo $this->_dataHelper->getGeneralConfigs('enable');
        echo "<br>";
        echo $this->_dataHelper->getGeneralConfigs('display_text');
    }
}