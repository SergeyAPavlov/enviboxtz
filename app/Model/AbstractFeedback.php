<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pavlov
 * Date: 28.03.2020
 * Time: 20:03
 */

namespace App\Model;

abstract class AbstractFeedback
{
    public $fields = ['name', 'phone', 'text'];
    abstract function createModel();
    abstract function saveFeedback(Array $fields);
    abstract function getAllFeedbacks();

}