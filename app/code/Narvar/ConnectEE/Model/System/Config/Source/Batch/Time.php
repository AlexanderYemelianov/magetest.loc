<?php
/**
 * Config Batch Time Source Model
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Model\System\Config\Source\Batch;

class Time implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Method to return Options for Batch start time Configuration
     *
     * @return array of start timings
     */
    public function toOptionArray()
    {
        $options = [
            '' => __('-- Please Select --')
        ];
        
        for ($startTime = 0; $startTime <= 23; $startTime ++) {
            $options[$startTime] = $startTime;
        }

        return $options;
    }
}