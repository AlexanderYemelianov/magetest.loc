<?php
/**
 * Configuration Handshake Plugin
 *
 * @category    Narvar
 * @package     Narvar_ConnectEE
 * @version     0.1.0
 * @author      premkumarsankar premkumar.sankar@aspiresys.com
 * @copyright   Copyright (c) 2012-2017 Narvar Inc
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
namespace Narvar\ConnectEE\Plugin\System\Config;

use Narvar\ConnectEE\Model\Activator;

class Handshake
{
    /**
     * @var \Narvar\ConnectEE\Model\Activator
     */
    private $activator;

    /**
     * Constructor
     *
     * @param Activator $activator
     */
    public function __construct(Activator $activator)
    {
        $this->activator =  $activator;
    }

    /**
     * Event Observer to before save the narvar configuration
     *
     * @param \Magento\Config\Model\Config $config
     * @return \Magento\Config\Model\Config
     */
    public function beforeSave(\Magento\Config\Model\Config $config)
    {
        return $this->activator->activationProcess($config);
    }
}
