<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 15:41
 */

namespace Base\View\Model;

use Base\View\Api\PostManagementInterface;

class PostManagement implements PostManagementInterface
{
    /**
     * {@inheritdoc}
     */
    public function getPost($param)
    {
        return 'api GET return the $param ' . $param;
    }
}