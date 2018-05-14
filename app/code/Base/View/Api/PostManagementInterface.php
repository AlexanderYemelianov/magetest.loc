<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 15:39
 */

namespace Base\View\Api;


interface PostManagementInterface {


    /**
     * GET for Post api
     * @param string $param
     * @return string
     */

    public function getPost($param);
}