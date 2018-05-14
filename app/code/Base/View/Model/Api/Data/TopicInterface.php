<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 10.05.18
 * Time: 18:47
 */

namespace Base\View\Model\Api\Data;

interface TopicInterface
{
    public function getId();
    public function setId();

    public function getTitle();
    public function setTitle();

    public function getContent();
    public function setContent();

    public function getCreationTime();
    public function setCreationTime();
}