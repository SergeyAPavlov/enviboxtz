<?php
/**
 * Created by PhpStorm.
 * User: Sergey Pavlov
 * Date: 29.03.2020
 * Time: 14:57
 */

namespace App\Model;
use App\Feedback;

class FeedbackFactory
{
    public static function getFeedback()
    {
        $feedback = new Feedback();
        // здесь можно поставить выбор нужного класса, например, по конфигу
        return new ConcreteFeedback($feedback);
    }
}