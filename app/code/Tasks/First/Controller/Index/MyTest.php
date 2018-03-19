<?php

namespace Tasks\First\Controller\Index;

use \Magento\Framework\App\Action\Action;

class MyTest extends Action{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    private $_pageFactory;
    private $_scopeConfig;
    private $_dbConnection;
    private $_config;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     */

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Config\Model\Config $config
    ) {
        $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
        $resource = $objectManager->get('Magento\Framework\App\ResourceConnection');
        $this->_dbConnection = $resource->getConnection();

        $this->_config = $config;
        $this->_scopeConfig = $scopeConfig;
        $this->_pageFactory = $pageFactory;
        return parent::__construct($context);
    }

    /**
     *
     */
    public function execute()
    {
        $sql = "SELECT `core_config_data`.`path` FROM `core_config_data`";
        $result = $this->_dbConnection->fetchAll($sql);

        $pathArray = [];
        foreach ($result as $pathFull){
            $section = explode('/', $pathFull['path'])[0];
            if( !in_array($section, $pathArray) ){
                $pathArray[] = $section;
            }
        }

        foreach($pathArray as $path){
//            var_dump( $this->_config->getConfigDataValue($path) );
        }

        var_dump( $this->_config->getConfigDataValue('') );

//        var_dump($this->_scopeConfig->getValue('example_section/general/textarea_example', \Magento\Store\Model\ScopeInterface::SCOPE_STORE));
//        var_dump($this->_pageFactory);
    }
}
