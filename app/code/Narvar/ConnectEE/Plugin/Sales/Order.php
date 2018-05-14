<?php
/**
 * Narvar Order Plugin
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Plugin\Sales;

use Narvar\ConnectEE\Helper\Audit\Type;
use Narvar\ConnectEE\Model\Data\TransformerFactory;

class Order
{

    /**
     *
     * @var \Narvar\ConnectEE\Model\Data\Transformer
     */
    private $transformer;
    
    /**
     * Constructor
     *
     * @param TransformerFactory $transformer
     */
    public function __construct(TransformerFactory $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * Method to push Order details to narvar
     *
     * @param \Magento\Sales\Model\Order $order
     */
    public function afterSave(\Magento\Sales\Model\Order $order)
    {
        $data = [
            'order' => $order,
            'shipment' => null
        ];
        
        $this->transformer->create()->transform(Type::ENT_TYPE_ORDER, $data);
    }
}
