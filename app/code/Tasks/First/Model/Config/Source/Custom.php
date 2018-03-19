<?php
/**
 * Created by PhpStorm.
 * User: andrew
 * Date: 14.03.18
 * Time: 11:13
 */

namespace Tasks\First\Model\Config\Source;


class Custom implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * @return array
     */
    public function toOptionArray()
    {

        return [
            ['value' => 0, 'label' => __('Zero')],
            ['value' => 1, 'label' => __('One')],
            ['value' => 2, 'label' => __('Two')],
        ];
    }
}