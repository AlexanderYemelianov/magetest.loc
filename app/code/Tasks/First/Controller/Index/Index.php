<?php

namespace Tasks\First\Controller\Index;

use \Magento\Framework\App\Action\Action;

/**
 * Class Index
 * @package Tasks\First\Controller\Index
 */
class Index extends Action{

    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_pageFactory;
    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $_scopeConfig;
    /**
     * @var \Magento\Config\Model\Config
     */
    protected $_config;

    /**
     * Index constructor.
     * @param \Magento\Framework\App\Action\Context $context
     * @param \Magento\Framework\View\Result\PageFactory $pageFactory
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig
     * @param \Magento\Config\Model\Config $config
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory,
        \Magento\Framework\App\Config\ScopeConfigInterface $scopeConfig,
        \Magento\Config\Model\Config $config
    ){
        $this->_config = $config;
        $this->_scopeConfig = $scopeConfig;
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
//        var_dump( $this->_config->getConfigDataValue('example_section') );

        $configArray = $this->_config->getConfigDataValue('');
        $domTree = new \DOMDocument('1.0', 'UTF-8');
        $xml = $this->arrayToXml($domTree, $configArray, 'configs');

        echo $xml;
    }


    /**
     * @param \DOMDocument $domTree
     * @param array $array
     * @param string $xmlRootName
     * @param \DOMNode|null $element
     * @return string
     */
    public function arrayToXml(\DOMDocument $domTree, array $array, string $xmlRootName = 'xml', \DOMNode $element = null)
    {

        foreach ($array as $key => $value) {

            //Key belows call Warning: DOMDocument::createElement() expects parameter 1 to be string, object given
            /*if( in_array($key, ['style', 'checkout', 'carriers', 'oauth','cataloginventory', 'google', 'dev', 'system', 'web', 'admin', 'general', 'theme', 'currency', 'customer', 'cms', 'export', 'catalog', 'payment', 'sales', 'sales_email', 'sales_pdf', 'dashboard', 'contact']) ){
                continue;
            }*/

            if( is_null($value) ){
                continue;
            }

            if(is_array($value)) {
                $newElement = $domTree->createElement($key);
                if( is_null($element) ){

                    $xmlRoot = $domTree->createElement($xmlRootName);
                    $xmlRoot = $domTree->appendChild($xmlRoot);
                    $newElement = $xmlRoot->appendChild($newElement);
                }else{
                    $newElement = $element->appendChild($newElement);
                }
                $this->arrayToXml($domTree, $value, false, $newElement);

            } else {
                $element->appendChild($domTree->createElement($key, $value));
            }
        }

        $domTree->formatOutput = true;

        return $domTree->saveXML();

    }
}
