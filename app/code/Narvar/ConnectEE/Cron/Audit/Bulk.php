<?php
/**
 * Audit Bulk Upload Cron
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Cron\Audit;

use Narvar\ConnectEE\Model\Batch\Audit\Bulk as BulkUploader;

class Bulk
{
    /**
     *
     * @var \Narvar\ConnectEE\Model\Batch\Audit\Bulk
     */
    private $bulkUploader;

    /**
     * Constructor
     *
     * @param BulkUploader $logger
     */
    public function __construct(
        BulkUploader $logger
    ) {
        $this->bulkUploader = $logger;
    }

    /**
     * Method to process the failure records based on configuration
     */
    public function execute()
    {
        $this->bulkUploader->process();
        
        return $this;
    }
}
