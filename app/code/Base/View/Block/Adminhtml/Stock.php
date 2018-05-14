<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 11.05.18
 * Time: 12:33
 */

namespace Base\View\Block\Adminhtml;

use Magento\Backend\Block\Template;

class Stock extends Template
{

    /**
     * @var Template\Context
     */
    private $context;
    /**
     * @var \Magento\CatalogInventory\Model\ResourceModel\Stock\Item
     */
    private $itemStockResource;

    public function __construct(
        Template\Context $context,
        \Magento\CatalogInventory\Model\ResourceModel\Stock\Item $itemStock,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->context = $context;
        $this->itemStockResource = $itemStock;
    }

    public function greet()
    {
        return 'Hello world';
    }

    public function getStock()
    {
        $select = $this->itemStockResource->getConnection()->select()->from($this->itemStockResource->getMainTable());
        $stockItems = $this->itemStockResource->getConnection()->fetchAll($select);
        return $stockItems;
    }
}