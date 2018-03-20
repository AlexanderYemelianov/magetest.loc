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

    /**
     * @var
     */
    protected $_customAttribute;
    /**
     * @var \Magento\Framework\Registry
     */
    protected $_registry;
    /**
     * @var mixed
     */
    protected $_product;
    /**
     * @var string
     */
    private $_attrName = 'new_custom_attribute';

    /**
     * CustomAttribute constructor.
     * @param Template\Context $context
     * @param \Magento\Framework\Registry $registry
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Framework\Registry $registry,
        array $data = []
    ){
        $this->_registry = $registry;
        $this->_product = $this->getCurrentProduct();
        parent::__construct($context, $data);
    }

    /**
     * Get custom attribute from $_product by $_attrName
     *
     * @return \Magento\Framework\Phrase
     */
    public function getCustomAttribute()
    {
        $attr = $this->_product->getResource()->getAttribute($this->_attrName)->getFrontend()->getValue($this->_product);

        return $attr ?? __('Custom attribute not assigned.');
    }

    /**
     * Get custom attribute name from $_product by $_attrName
     *
     * @return mixed
     */
    public function getCustomAttributeLabel()
    {
        $label = $address =$this->_product->getResource()->getAttribute($this->_attrName)->getStoreLabel();

        return $label;
    }

    /**
     * Get $_product entity
     *
     * @return mixed
     */
    public function getCurrentProduct()
    {
        return $this->_registry->registry('product');
    }

}