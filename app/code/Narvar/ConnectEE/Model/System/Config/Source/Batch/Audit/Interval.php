<?php
/**
 * Config Batch Audit Interval Source Model
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Model\System\Config\Source\Batch\Audit;

use Narvar\ConnectEE\Model\Batch\Audit\Interval as AuditInterval;

class Interval implements \Magento\Framework\Option\ArrayInterface
{

    /**
     * Method to return Options for Batch Clean up interval Configuration
     *
     * @return array of frequencies
     */
    public function toOptionArray()
    {
        return [
            [
                'value' => '',
                'label' => __('-- Please Select --')
            ],
            [
                'value' => AuditInterval::LAST_FIFTEEN_DAYS,
                'label' => __('Last 15 days')
            ],
            [
                'value' => AuditInterval::LAST_THIRTY_DAYS,
                'label' => __('Last 30 days')
            ],
            [
                'value' => AuditInterval::LAST_FOURTY_FIVE_DAYS,
                'label' => __('Last 45 days')
            ],
            [
                'value' => AuditInterval::LAST_SIXTY_DAYS,
                'label' => __('Last 60 days')
            ],
            [
                'value' => AuditInterval::LAST_NINTY_DAYS,
                'label' => __('Last 90 days')
            ],
            [
                'value' => AuditInterval::LAST_ONE_HUNDREAD_EIGHT_DAYS,
                'label' => __('Last 180 days')
            ]
        ];
    }
}
