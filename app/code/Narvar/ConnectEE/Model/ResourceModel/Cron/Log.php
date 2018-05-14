<?php
/**
 * Cron Log Resource Model
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Model\ResourceModel\Cron;

use Narvar\ConnectEE\Model\Cron\Log as CronLogModel;
use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class Log extends AbstractDb
{

    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init(CronLogModel::TABLE_NAME, CronLogModel::LOG_ID);
    }
}
