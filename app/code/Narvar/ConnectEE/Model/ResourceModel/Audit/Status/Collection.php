<?php
/**
 * Audit Status Resource Model
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Model\ResourceModel\Audit\Status;

use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init('Narvar\ConnectEE\Model\Audit\Status', 'Narvar\ConnectEE\Model\ResourceModel\Audit\Status');
    }
}
