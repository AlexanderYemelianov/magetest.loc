<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 20.03.18
 * Time: 12:18
 */

namespace Tasks\Third2\Block;


use Magento\Framework\View\Element\Template;

class CustomAttribute extends \Magento\Framework\View\Element\Template
{

    protected $_customAttribute;
    protected $_registry;
    protected $_product;
    private $_attrName = 'sample_attribute';

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ){
        $this->_registry = $registry;
        $this->_product = $this->getCurrentProduct();
        parent::__construct($context, $data);
    }

    public function getCustomAttribute()
    {
//        $product = $this->getCurrentProduct();
        $attr = $this->_product->getResource()->getAttribute($this->_attrName)->getFrontend()->getValue($this->_product);

        return $attr ?? __('Custom attribute not assigned.');
    }

    public function getCustomAttributeLabel()
    {
        $label = $address =$this->_product->getResource()->getAttribute($this->_attrName)->getStoreLabel();

        return $label;
    }

    public function getCurrentProduct()
    {
        return $this->_registry->registry('product');
    }

}