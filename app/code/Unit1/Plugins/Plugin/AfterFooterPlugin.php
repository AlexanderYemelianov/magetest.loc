<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 07.03.18
 * Time: 11:23
 */

namespace Unit1\Plugins\Plugin;


class AfterFooterPlugin
{
    /**
     * @param \Magento\Theme\Block\Html\Footer $subject
     * @param $result
     * @return string
     */
    public function afterGetCopyright(\Magento\Theme\Block\Html\Footer $subject, $result)
    {
        return $result = "Mega customized copyright!";
    }
}