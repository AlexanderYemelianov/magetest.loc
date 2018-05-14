<?php
/**
 * Config Return Condition Source Model
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Model\System\config\Source\Returns;

use Narvar\ConnectEE\Model\Eav\Attributes\OptionsFactory;
use Magento\Rma\Model\Item;
use Narvar\ConnectEE\Helper\Config\Returns as ReturnsHelper;

class Condition
{
    /**
     *
     * @var \Narvar\ConnectEE\Model\Eav\Attributes\OptionsFactory
     */
    private $eavAttributeOptionFactory;
    
    /**
     * Constructor
     *
     * @param OptionsFactory $eavAttributeOptionFactory
     */
    public function __construct(OptionsFactory $eavAttributeOptionFactory)
    {
        $this->eavAttributeOptionFactory = $eavAttributeOptionFactory;
    }
    
    /**
     * Method to return RMA Item attribute condition options
     *
     * @return multitype
     */
    public function toOptionArray()
    {
        return true;
        return $this->eavAttributeOptionFactory->create()
            ->getAttributeOptions(
                Item::ENTITY,
                ReturnsHelper::CONDITION,
                true
            );
    }
}
