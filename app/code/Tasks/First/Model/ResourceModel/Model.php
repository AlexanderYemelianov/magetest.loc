<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 15.03.18
 * Time: 15:00
 */

namespace Tasks\First\Model\ResourceModel;

use \Magento\Framework\Model\ResourceModel\Db\AbstractDb;
class Model extends AbstractDb
{

    /**
     * Resource initialization
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('core_config_data', 'config_id');
    }
}