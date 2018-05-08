<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 08.05.18
 * Time: 15:53
 */

namespace Base\View\Helper;

use Magento\Framework\App\Helper\AbstractHelper;
use Magento\Store\Model\ScopeInterface;

class Data extends AbstractHelper
{
    const XML_PATH_SECTION = 'helloworld';

    const XML_PATH_GROUP = 'general';

    /**
     * @param $path
     * @param null $storeId
     * @return mixed
     */
    public function getConfigValue($path, $storeId = null)
    {
        return $this->scopeConfig->getValue(
            $path,
            ScopeInterface::SCOPE_STORE,
            $storeId
        );
    }


    public function getGeneralConfigs($code, $storeId = null)
    {
        return $this->getConfigValue(
            sprintf('%s/%s/%s', self::XML_PATH_SECTION, self::XML_PATH_GROUP, $code),
            $storeId
        );
    }
}