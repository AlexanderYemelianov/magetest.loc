<?php

namespace Tasks\First\Controller\Index;

use \Magento\Framework\App\Action\Action;

/**
 * Class Index
 * @package Tasks\First\Controller\Index
 */
class SimpleXMLTest extends Action{

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
        var_dump( $this->_config->getConfigDataValue('') );

        $object = new \SimpleXMLElement("<configs encoding='utf-8'/>");
        $xml = $this->_arrayToXml($object, $this->_config->getConfigDataValue('example_section'));

//        mb_convert_encoding($xml, 'UTF-8', 'ASCII');
//        utf8_encode($xml);
//        echo mb_detect_encoding($xml, "auto");
//        $dom = dom_import_simplexml($xml)->ownerDocument;
//        $dom->formatOutput = true;
//        echo mb_detect_encoding($dom->saveXML(), "auto");
//        var_dump($dom->saveXML());
        print $xml->asXML();

    }

    /**
     * @param \SimpleXMLElement $object
     * @param array $array
     * @return \SimpleXMLElement
     */
    private function _arrayToXml(\SimpleXMLElement $object, array $array)
    {
        foreach ($array as $key => $value) {
            //$key == google cause Exception #0 (Exception) Warning: SimpleXMLElement::addChild(): unterminated entity reference guid=ON&amp;script=0
            if($key == 'google' || $value == '' || $key == 'connector_transactional_emails'){
                continue;
            }

            if(is_array($value)) {
                $new_object = $object->addChild($key);
                $this->_arrayToXml($new_object, $value);
            } else {
                // if the key is an integer, it needs text with it to actually work.
                if($key == (int) $key) {
                    $key = "key_$key";
                }

                $object->addChild($key, $value);

//                echo $object->asXML();
            }
        }

        return $object;

    }
}
